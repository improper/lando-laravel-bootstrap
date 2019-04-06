<?php

namespace App\Console\Commands\Mailhog;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailhog:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trigger an email to a fake address to ensure Mailhog is catching emails.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('welcome', [], function ($message) {
            $message->to('myawesomeemail@docmeup.lndo.site')->subject('Testing mails');
        });
    }
}
