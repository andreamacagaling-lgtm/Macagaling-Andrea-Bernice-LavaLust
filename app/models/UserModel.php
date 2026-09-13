<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: UserModel
 * 
 * Automatically generated via CLI.
 */
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
        return $this->db->table($this->table)->insert($data);
    }

    public function delete_user($id) {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }

    public function get_user_by_username($username) {
        return $this->db->table($this->table)->where('username', $username)->get();
    }
}