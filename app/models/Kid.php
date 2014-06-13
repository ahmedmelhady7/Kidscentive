class Kid extends Eloquent {
    protected $table = "kids";

    public function user()
    {
        return $this->morphOne('User', 'userable');
    }
}