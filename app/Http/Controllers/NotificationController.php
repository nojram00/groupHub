<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function adminNotification(){
        $users = User::all()->where('role', 'user');
        $data = [

        ];
        return view('.admin.admin-notification', ['users' => $users]);
    }
    public function addNotification(Request $request, Notification $notification){
        // $notifs = Notification::all();

        // dd($request);
        $username = $request->user_name;
        $notificationType = $request->notification;

        if($notificationType == 'parking_alert'){
            $notifMsg = 'Parking Alert: Your time is about to end, please click the button below to extend.';
        }
        if($notificationType == 'thanks'){
            $notifMsg = 'Thank you for using our SM Parking System. Have a great day!';
        }

        // dd($username, $notificationType);
        $data = [
            'target_user' => $username,
            'notification' => $notifMsg,
        ];
        Notification::insert($data);
        return redirect('/admin/notifications');
    }

    public function displayNotifications(){
        $username = auth()->user()->name;
        $notifs = Notification::all()->where('target_user', $username);

        return view('.dashboard.notifications', ['notifications' => $notifs]);
    }

    public function deleteNotification(Notification $notification){
        // dd($request);
        $notification->delete();
        return redirect('/notifications')
                ->with('message', 'Notification deleted!')
                ->with('header', 'Success!');
    }
}
