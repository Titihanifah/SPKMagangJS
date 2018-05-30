public function isPaymentDone()
{
    if($this->role_id == 1)
    {
    return $this->paid_amount >= $this->shortFilm->submitting_slot * 65000; // biaya movie 65k
    return $this->nilai_tugas >=
    }
    else if($this->role_id == 3)
    {
    return $this->paid_amount >= 10000; // biaya concert 10k
    }
}