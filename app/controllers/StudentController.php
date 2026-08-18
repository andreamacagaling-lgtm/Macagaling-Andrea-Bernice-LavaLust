<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        session_start();

        $_SESSION['student_access'] = true;

        $this->call->view('student_home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00248',
            'name' => 'Andrea Bernice D. Macagaling',
            'course' => 'Bachelor of Science in Information Technology',
            'year' => '3rd Year',
            'section' => 'III-F5',
            'email' => 'andreamacagaling@gmail.com',
            'address' => 'Tahik A, Patas, Calapan City, Oriental, Mindoro',
            'contact_number' => '09637834915',
            'skills' => 'HTML, CSS',
            'hobbies' => 'Reading, cooking, watching k-dramas, and listening to music',
            'profile_description' => 'I am dedicated to learn new things that will help me grow as a person.',
            'social_media' => [
                'facebook' => 'https://www.facebook.com/andreabernice.macagaling'
            ]
        ];

        $this->call->view('student_profile', $student);
    }
}