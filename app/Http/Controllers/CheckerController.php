<?php

namespace App\Http\Controllers;

use App\Models\ScamReport;
use Illuminate\Http\Request;

class CheckerController extends Controller
{
    public function index()
    {
        return view('checker.index');
    }

    public function check(Request $request)
    {
        $data = $request->validate([
            'input' => ['required', 'string', 'max:5000'],
            'type' => ['required', 'in:message,url'],
        ]);

        $text = strtolower(trim($data['input']));
        $score = 0;
        $reasons = [];

        $rules = [
            'otp' => ['OTP requested', 3],
            'one time password' => ['OTP requested', 3],
            'pin' => ['PIN-related request', 3],
            'cvv' => ['CVV/card security information requested', 3],
            'password' => ['Password requested', 3],
            'kyc' => ['KYC/identity verification pressure', 2],
            'urgent' => ['Urgency language', 2],
            'immediately' => ['Urgency language', 2],
            'click here' => ['Suspicious call-to-action', 2],
            'verify now' => ['Suspicious verification request', 2],
            'account blocked' => ['Account-threat language', 3],
            'account will be blocked' => ['Account-threat language', 3],
            'won' => ['Prize/reward language', 2],
            'winner' => ['Prize/reward language', 2],
            'cashback' => ['Cashback/reward language', 1],
            'free gift' => ['Prize/gift language', 2],
            'claim now' => ['Urgent claim language', 2],
            'send money' => ['Payment request', 3],
            'pay now' => ['Payment request', 3],
            'refund' => ['Refund-related scam indicator', 1],
            'investment' => ['Investment-related content', 1],
            'guaranteed return' => ['Guaranteed-return investment claim', 3],
            'job offer' => ['Job/recruitment indicator', 1],
            'registration fee' => ['Possible job-fee scam', 3],
        ];

        foreach ($rules as $keyword => [$reason, $points]) {
            if (str_contains($text, $keyword)) {
                $score += $points;
                if (!in_array($reason, $reasons, true)) {
                    $reasons[] = $reason;
                }
            }
        }

        if ($data['type'] === 'url') {
            if (!str_starts_with($text, 'https://')) {
                $score += 2;
                $reasons[] = 'Website does not use HTTPS';
            }
            if (filter_var($text, FILTER_VALIDATE_URL) === false) {
                $score += 2;
                $reasons[] = 'Input does not look like a valid URL';
            }
            if (preg_match('/@|(\d{1,3}\.){3}\d{1,3}/', $text)) {
                $score += 3;
                $reasons[] = 'URL contains a potentially suspicious structure';
            }
            if (strlen($text) > 100) {
                $score += 1;
                $reasons[] = 'Unusually long URL';
            }
            if (preg_match('/login|verify|secure|account|update|wallet|bank/', $text)) {
                $score += 1;
                $reasons[] = 'Sensitive-account keywords found in URL';
            }
        }

        $level = match (true) {
            $score >= 6 => 'High Risk',
            $score >= 3 => 'Suspicious',
            default => 'Low Risk',
        };

        $advice = match ($level) {
            'High Risk' => 'Do not click links, share OTP/PIN/passwords, or send money. Verify through the organisation’s official website or app.',
            'Suspicious' => 'Be careful. Do not provide personal or financial information until the sender and request are independently verified.',
            default => 'No strong warning signs were detected by this basic rule-based checker. Still verify unexpected requests independently.',
        };

        ScamReport::create([
            'input_type' => $data['type'],
            'input_value' => $data['input'],
            'risk_level' => $level,
            'score' => $score,
            'reasons' => $reasons,
        ]);

        return view('checker.result', compact('level', 'score', 'reasons', 'advice'));
    }
}
