<?php
abstract class Entity
{
    public ?int $id;
    public Date $created_at;
    public Date $updated_at;

    public function __construct(int $id, ?Date $created = null, ?Date $updated = null)
    {
        $this->id = $id;
        $this->created_at = $created;
        $this->updated_at = $updated;
    }
}
