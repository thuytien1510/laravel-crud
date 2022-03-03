<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    /**
     * @var Role
     */
    protected $role;

    /**
     * RoleRepository constructor.
     *
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Get all roles.
     *
     * @return Role $role
     */
    public function getAll()
    {
        // return $this->role
        //     ->get();
        return $this->role->orderBy('id', 'DESC')->paginate(5);
    }

    public function getById($id)
    {
        return $this->role
            ->where('id', $id)
            ->get();
    }
    public function save($data)
    {
        $role = new $this->role;

        $role->name = $data['name'];

        $role->save();

        return $role->fresh();
    }

    public function update($data, $id)
    {

        $role = $this->role->find($id);

        $role->name = $data['name'];

        $role->update();

        return $role;
    }

    public function delete($id)
    {

        $role = $this->role->find($id);
        $role->delete();

        return $role;
    }
    public function search($name)
    {
        return $this->role->where('name', 'like', '%'.$name.'%')->latest('id')->paginate(5);
    }
}
