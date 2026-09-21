<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $fillable = ['username', 'password'];
    protected $guarded = ['id'];

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_user($data) {
        return $this->db->table('users')->insert($data);
    }

    public function get_user_by_username($username) {
        return $this->db->table('users')->where('username', $username)->get_all();
    }
}