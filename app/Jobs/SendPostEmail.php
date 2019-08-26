<?php

namespace App\Jobs;


use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use App\Models\Post;

class SendPostEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $data= array(
             'title'=> $this->post->title,
             'body'=> $this->post->body,
            );
         
        Mail::send('emails.post', $data, function($message){
        $message->from('lechithanhbt@gmail.com', 'Laravel Mail');
        $message->to('hieunguyen970126@gmail.com')->subject('There is a new post');
        });
        
    }
}<p> A new post has been created </p> 
 <p> {!! $title !!}</p>
 <p> {!! $body  !!} </p>
