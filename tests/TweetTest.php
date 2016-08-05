<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TweetTest extends TestCase
{
    /**
     * Test empty message   
     */
    public function testEmptyMessage()
    {
        
        
        $this->post('/tweet/post', ['message' => '']) 
         ->see('Message is empty');
    }
    
     /**
     * Test  message     
     */
     public function testMessage()
    {       
        
        $this->post('/tweet/post', ['message' => 'Hello There 2']) 
         ->see('Successfull')
         ->dontSee('Error:');
    }
}
