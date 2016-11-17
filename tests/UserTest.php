<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_is_landing_page()
    {
        $this->visit('/')
             ->see('Landing Page here');
    }

    public function test_visit_login_page()
    {
        $this->visit('/')
             ->click('Login')
             ->seePageIs('/login');
    }

    public function test_logged_in_success()
    {
        $this->visit('/login')
             ->type('neiljun.odiaz@redlemonph.com', 'email')
             ->type('8552530123', 'password')
             ->press('Login')
             ->seePageIs('/home');
    }

    public function test_should_see_user_name_after_registration()
    {
        $this->visit('/register')
             ->type('Just Another Dope', 'name')
             ->type('neiljun_odiaz@redlemonph.com', 'email')
             ->type('85525301231', 'password')
             ->type('85525301231', 'password_confirmation')
             ->press('Register')
             ->see('Just Another Dope');
    }
}
