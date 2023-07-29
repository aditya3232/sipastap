<?php

namespace App\Policies;

use App\Models\Sidebar;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SidebarPolicy
{

    // jika role admin, maka admin bisa akses semua permissions
    public function before(User $user, $ability) {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    // ini authorization untuk permission 
    public function sidebarParentDashboard(User $user)
    {
        return $user->role->hasPermission('sidebar parent dashboard'); 
    }

    public function sidebarChildDashboard(User $user)
    {
        return $user->role->hasPermission('sidebar child dashboard'); 
    }

    public function sidebarParentMasterData(User $user)
    {
        return $user->role->hasPermission('sidebar parent master data'); 
    }

    public function sidebarChildMasterDataPendaftaranSidikJari(User $user)
    {
        return $user->role->hasPermission('sidebar child master data pendaftaran sidik jari'); 
    }

    public function sidebarChildMasterDataPermohonanSim(User $user)
    {
        return $user->role->hasPermission('sidebar child master data permohonan sim'); 
    }

    public function sidebarChildMasterDataLaporanKehilangan(User $user)
    {
        return $user->role->hasPermission('sidebar child master data laporan kehilangan'); 
    }

    public function sidebarChildMasterDataTindakKriminal(User $user)
    {
        return $user->role->hasPermission('sidebar child master data laporan tindak kriminal'); 
    }

    public function sidebarChildMasterDataPengaduanMasyarakat(User $user)
    {
        return $user->role->hasPermission('sidebar child master data pengaduan masyarakat'); 
    }

    public function sidebarChildMasterDataPendaftaranSkck(User $user)
    {
        return $user->role->hasPermission('sidebar child master data pendaftaran skck'); 
    }

    public function sidebarParentAdmin(User $user)
    {
        return $user->role->hasPermission('sidebar parent admin'); 
    }

    public function sidebarChildAdminUsers(User $user)
    {
        return $user->role->hasPermission('sidebar child admin users'); 
    }

    public function sidebarChildAdminRoles(User $user)
    {
        return $user->role->hasPermission('sidebar child admin roles'); 
    }

    public function sidebarChildAdminPermissions(User $user)
    {
        return $user->role->hasPermission('sidebar child admin permissions'); 
    }

    public function sidebarChildAdminLogs(User $user)
    {
        return $user->role->hasPermission('sidebar child admin logs'); 
    }

}