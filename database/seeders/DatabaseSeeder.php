<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\QuizQuestion;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'How to Identify Phishing',
                'slug' => 'how-to-identify-phishing',
                'category' => 'Phishing',
                'summary' => 'Learn how attackers use fake messages and websites to steal information.',
                'content' => "Phishing is a social-engineering technique used to trick people into revealing passwords, OTPs, card details or other sensitive information.\n\nCheck the sender carefully, avoid unexpected links, and access banking or official services through their official app or website rather than a message link.\n\nNever share an OTP, PIN, CVV or password with someone who contacts you unexpectedly."
            ],
            [
                'title' => 'UPI and OTP Fraud',
                'slug' => 'upi-and-otp-fraud',
                'category' => 'Banking Fraud',
                'summary' => 'Understand common payment and OTP scams.',
                'content' => "A UPI PIN is used to authorise payments; you do not need to enter it merely to receive money. Be suspicious of collect requests, fake customer-care numbers, screen-sharing requests and OTP requests.\n\nIf a caller asks for your OTP, PIN or password, stop the conversation and verify through the official bank or payment-app channel."
            ],
            [
                'title' => 'Job and Investment Scams',
                'slug' => 'job-and-investment-scams',
                'category' => 'Online Scam',
                'summary' => 'Spot fake jobs, registration-fee scams and unrealistic investment returns.',
                'content' => "Fraudsters may promise easy jobs, guaranteed returns or unusually high income. Requests for registration fees, security deposits, remote-access software or transfers to personal accounts are warning signs.\n\nVerify companies and investment opportunities independently before paying or sharing documents."
            ],
            [
                'title' => 'Safe Online Shopping',
                'slug' => 'safe-online-shopping',
                'category' => 'Shopping Fraud',
                'summary' => 'Protect yourself from fake shopping websites and unrealistic offers.',
                'content' => "Check the website domain, contact details, return policy and payment options. Extremely low prices, copied branding and pressure to pay immediately can be warning signs.\n\nPrefer established platforms and avoid downloading unknown applications sent through messages."
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(['slug' => $article['slug']], $article);
        }

        $questions = [
            ['question'=>'A caller asks for your bank OTP. What should you do?','option_a'=>'Share it if they know your name','option_b'=>'Share only the last digit','option_c'=>'Do not share it and verify through the official bank','option_d'=>'Send your PIN instead','correct_option'=>3,'explanation'=>'Banks and legitimate support staff should not ask you to disclose your OTP.'],
            ['question'=>'Which is a strong phishing warning sign?','option_a'=>'An unexpected urgent request to click a link','option_b'=>'A bookmarked official website','option_c'=>'A known contact confirmed independently','option_d'=>'A normal offline notice','correct_option'=>1,'explanation'=>'Urgency plus an unexpected link is a common phishing pattern.'],
            ['question'=>'Should you enter a UPI PIN to receive money?','option_a'=>'Yes','option_b'=>'No','option_c'=>'Only at night','option_d'=>'Only for refunds','correct_option'=>2,'explanation'=>'A UPI PIN authorises payments; it is not normally required just to receive money.'],
            ['question'=>'What should you do with a suspicious shortened URL?','option_a'=>'Click it quickly','option_b'=>'Forward it to friends','option_c'=>'Open it in banking app','option_d'=>'Avoid it and verify the source','correct_option'=>4,'explanation'=>'Shortened or unfamiliar URLs can hide the destination.'],
            ['question'=>'A job recruiter asks for a registration fee before an interview. What is the safest response?','option_a'=>'Pay immediately','option_b'=>'Verify the employer independently and avoid suspicious payments','option_c'=>'Share OTP','option_d'=>'Send your ATM PIN','correct_option'=>2,'explanation'=>'Upfront fees are a common job-scam indicator.'],
            ['question'=>'Which information should never be shared with an unknown caller?','option_a'=>'Public office address','option_b'=>'Company website','option_c'=>'OTP, PIN and password','option_d'=>'General product name','correct_option'=>3,'explanation'=>'Authentication secrets must remain private.'],
            ['question'=>'What is the safest way to open your bank website after receiving a message?','option_a'=>'Use the message link','option_b'=>'Search randomly and click ads','option_c'=>'Type the official address or use the official app','option_d'=>'Ask the sender for another link','correct_option'=>3,'explanation'=>'Use a known official route rather than an unexpected message link.'],
            ['question'=>'A message says your account will be blocked in 10 minutes unless you act. What is this likely using?','option_a'=>'Urgency and fear','option_b'=>'Normal customer service','option_c'=>'A software update','option_d'=>'A password manager','correct_option'=>1,'explanation'=>'Threats and extreme urgency are common social-engineering tactics.'],
            ['question'=>'Which password practice is safer?','option_a'=>'Reuse one password everywhere','option_b'=>'Use unique strong passwords','option_c'=>'Write your password in a public chat','option_d'=>'Use your birth date','correct_option'=>2,'explanation'=>'Unique strong passwords reduce the impact of a compromised account.'],
            ['question'=>'If you suspect online fraud, what should you do first?','option_a'=>'Send more money to recover it','option_b'=>'Ignore everything','option_c'=>'Stop communication/payment and contact the relevant official channel','option_d'=>'Share your OTP with another caller','correct_option'=>3,'explanation'=>'Stop the suspected fraud and use verified official reporting/support channels.'],
        ];

        foreach ($questions as $question) {
            QuizQuestion::firstOrCreate(['question' => $question['question']], $question);
        }
    }
}
