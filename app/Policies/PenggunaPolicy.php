<?php

namespace App\Policies;

use App\Models\Pengguna;
use Illuminate\Auth\Access\Response;

class PenggunaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Pengguna $pengguna, Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Pengguna $pengguna, Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Pengguna $pengguna, Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Pengguna $pengguna, Pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Pengguna $pengguna, Pengguna $pengguna): bool
    {
        //
    }
}
