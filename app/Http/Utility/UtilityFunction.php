<?php
namespace App\Http\Utility;

use App\Models\Notifications;
use App\Models\Orders;
use App\Models\TriniteqOrders;
use App\Notifications\DeviceIdsFCM;
use App\Notifications\DeviceIdsAPN;
use App\Notifications\TopicFCM;
use App\User;
use Image;

trait UtilityFunction
{
    /**
     * For sending sms via bulk sms services
     *
     * @param String $mob mobile number
     * @param String $msg message body
     * @return Boolean false when sms sent successfully
     */
    protected function sendSMS($mob, $msg)
    {
        $msg = strip_tags($msg);
        $ch = curl_init();
        $user = "";
        $receipientno = $mob;
        $senderID = "";
        $msgtxt = $msg;
        curl_setopt($ch, CURLOPT_URL, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        $buffer = curl_exec($ch);
        curl_close($ch);
        return true;
    }

    

    
    /**
     * For sending fcm notification and sms to specific users
     *
     * @param String $title title of notification
     * @param String $body body message of notification
     * @param Integer $user_id user id to whom notification will be sent
     * @param Integer $task_id task id (group_invitation, ride_invitation_id)
     * @param String $task_type type of task need to perform (group_invitaion, ride_invitation)
     * @return Boolean false when notifications sent successfully
     */
    protected function sendDeviceNotification($title, $body, $user_id, $task_id, $task_type)
    {
        $user = User::findOrFail($user_id);
        if ($user) {

            $notification = new Notifications();
            $notification->task_id = $task_id;
            $notification->task_type = $task_type;
            $notification->user_id = $user->id;
            $notification->title = $title;
            $notification->message = $body;
            $notification->save();
            if($user->devices->first())
            //\Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type));
           /* if($user->devices->where('device_type', 'Android')->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', 'Android')->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type));
            if($user->devices->where('device_type', 'IOS')->first())
            \Notification::send(\Auth::user(), new DeviceIdsAPN($user->devices->where('device_type', 'IOS')->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type));*/
            //$this->sendSMS($user->mobile, $body);

            if($user->devices->where('device_type', 'Android')->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', 'Android')->where('device_token', '!=', NULL)->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type, 'Android'));
            if($user->devices->where('device_type', 'IOS')->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', 'IOS')->where('device_token', '!=', NULL)->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type, 'IOS'));
        }
        return true;
    }

    /**
     * For sending fcm notification and sms to specific users without save to database
     *
     * @param String $title title of notification
     * @param String $body body message of notification
     * @param Integer $user_id user id to whom notification will be sent
     * @param Integer $task_id task id (group_invitation, ride_invitation_id)
     * @param String $task_type type of task need to perform (group_invitaion, ride_invitation)
     * @return Boolean false when notifications sent successfully
     */
    protected function sendDeviceNotificationWithoutRecord($title, $body, $user_id, $task_id, $task_type)
    {
        $user = User::findOrFail($user_id);
        if ($user) {

            if($user->devices->where('device_type', 'Android')->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', 'Android')->where('device_token', '!=', NULL)->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type, 'Android'));
            if($user->devices->where('device_type', 'IOS')->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', 'IOS')->where('device_token', '!=', NULL)->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type, 'IOS'));
        }
        return true;
    }

    /**
     * For sending fcm notification and sms to specific users without save to database
     *
     * @param String $title title of notification
     * @param String $body body message of notification
     * @param Integer $user_id user id to whom notification will be sent
     * @param Integer $task_id task id (group_invitation, ride_invitation_id)
     * @param String $task_type type of task need to perform (group_invitaion, ride_invitation)
     * @return Boolean false when notifications sent successfully
     */
    protected function sendDeviceNotificationWithoutRecordDevice($title, $body, $device_type, $task_id, $task_type)
    {
            if($user->devices->where('device_type', $device_type)->first())
            \Notification::send(\Auth::user(), new DeviceIdsFCM($user->devices->where('device_type', $device_type)->where('device_token', '!=', NULL)->pluck('device_token')->toArray(),$title,strip_tags($body),$task_id,$task_type, $device_type));
        return true;
    }

    /**
     * For sending general notifications to all users
     *
     * @param String $title title of notification
     * @param String $body body message of notification
     * @return Boolean false when notifications sent successfully
     */
    protected function sendNotification($title, $body)
    {
        $notification = new Notifications();
        $notification->title = $title;
        $notification->message = $body;
        $notification->save();
        \Notification::send(User::find(1), new TopicFCM('all-ahoy', $title, strip_tags($body)));
        return true;
    }

    /**
     * For deleting images from directory
     *
     * @param String $image image name
     * @param String $imagePath image path
     * @param Array resizeArr image sizes
     */
    public function deleteImage($image, $imagePath, $resizeArr)
    {
        \Storage::delete($imagePath . '/' . $image);
        foreach ($resizeArr as $imagePrefix => $sizes) {
            \Storage::delete($imagePath . '/' . $imagePrefix . '-' . $image);
        }
    }

    /**
     * For deleting video from directory
     *
     * @param String $video video name
     * @param String $videoPath video path
     */
    public function deleteVideo($video, $videoPath)
    {
        $videoImage = $this->getVideoImage($video);
        \Storage::delete($videoPath . '/' . $video);
        \Storage::delete($videoPath . '/' . $videoImage);
    }

    /**
     * For resizing images
     *
     * @param String $image image object
     * @param String $imageName image name
     * @param String $imagePath image path
     * @param Array resizeArr image sizes
     */
    public function ImageResize($image, $imageName, $resizeArr, $imagePath)
    {

        foreach ($resizeArr as $imagePrefix => $sizes) {

            $resizeImgName = $imagePrefix . '-' . $imageName;

            $img = "";
            $img = Image::make($image);
            //$img->encode('png', 100)->trim($img->pickColor(10, 10, 'hex'));
            $img->trim('transparent', array('top', 'bottom'));
            $img->resize($sizes[0], $sizes[1], function ($constraint) {
                $constraint->aspectRatio();
            });
            
            $img->stream();
            \Storage::put($imagePath . '/' . $resizeImgName, $img);

        }

    }

    /**
     * For uploading images
     *
     * @param String $image image object
     * @param String $imagePath image path
     * @param Array resizeArr image sizes
     */
    public function uploadImage($image, $imagePath, $resizeArr)
    {
        $image_new = time() . rand() . '.' . $image->getClientOriginalExtension();
        $path = \Storage::disk('public')->putFileAs(
            $imagePath, $image, $image_new
        );

        /*
        call image resize function
         */
        if($image->getClientOriginalExtension() != 'pdf')
        $this->ImageResize($image, $image_new, $resizeArr, $imagePath);

        return $image_new;
    }

    /**
     * For uploading images
     *
     * @param String $image image object
     * @param String $imagePath image path
     * @param Array resizeArr image sizes
     */
    public function uploadImageByUrl($image, $imagePath, $resizeArr)
    {
        $image = file_get_contents($image);
        $image_new = time() . rand() . '.png';
        $path = \Storage::put(
            $imagePath.'/'.$image_new, $image
        );
        
        return $image_new;
    }

    /**
     * For uploading images with fix name
     *
     * @param String $image image object
     * @param String $imagePath image path
     * @param Array resizeArr image sizes
     */
    public function uploadImageWithSameName($image, $imagePath, $resizeArr)
    {

        $image_new = 'instagram.png';
        $path = \Storage::putFileAs(
            $imagePath, $image, $image_new
        );

        /*
        call image resize function
         */
        $this->ImageResize($image, $image_new, $resizeArr, $imagePath);

        return $image_new;
    }

    /**
     * For uploading videos
     *
     * @param String $video video object
     * @param String $videoPath video path
     */
    public function uploadVideo($video, $videoPath)
    {

        $video_new = "";
        if ($video) {
            $timeString = time();
            $video_new = $timeString . '.' . $video->getClientOriginalExtension();
            $path = \Storage::putFileAs($videoPath, $video, $video_new);

            $media = \FFMpeg::open($path);

            $media->getFrameFromSeconds(2)
                ->export()
                ->toDisk('local')
                ->save($videoPath . '/img-' . $timeString . '.png');

        }
        return $video_new;
    }

    /**
     * For uploading doc
     *
     * @param String $video video object
     * @param String $videoPath video path
     */
    public function uploadDoc($doc, $docPath)
    {

        $doc_new = "";
        if ($doc) {
            $timeString = time();
            $doc_new = $timeString . '.' . $doc->getClientOriginalExtension();
            $path = \Storage::putFileAs($docPath, $doc, $doc_new);
        }
        return $doc_new;
    }

    /**
     * For getting video duration
     *
     * @param String $vedioPath full path of video
     */
    public function getVideoDuration($videoPath)
    {

        $media = \FFMpeg::open($videoPath);
        $duration = gmdate("H:i:s", $media->getDurationInSeconds());

        return $duration;
    }

    /**
     * For getting video thumbnail name
     *
     * @param String $video video name object
     */
    public function getVideoImage($video)
    {
        if ($video != "") {
            $videoNameArr = explode('.', $video);
            return 'img-' . $videoNameArr[0] . '.png';
        }
    }

    public function getAvailability(){
        return [
            1 => "Freelancer/Contractual",
            2 => "Full time",
            3 => "Part time"
        ];
    }

    public function getJoiningAvailability(){
        return [
            1 => "Immediate",
            2 => "Within one week",
            3 => "Within two weeks",
            4 => "Within one month",
            5 => "Within two months",
            6 => "Within three months",
            7 => "More than three months"
        ];
    }

    public function getProfessionType(){
        return [
            1 => "Technical",
            2 => "Functional",
            3 => "Techno Functional",
            4 => "Project/ Program Manager",
            5 => "Management/ Leadership",
            6 => "HR Recruiter",
            7 => "Sales/ Business Development"
        ];
    }

    public function getRateFrequency(){
        return [
            1 => "Hourly",
            2 => "Daily",
            3 => "Monthly",
            4 => "Annually"
        ];
    }

    public function getMasterDataType(){
        return [
            1 => "Skill",
            2 => "Designation",
            3 => "Industry"
        ];
    }

    public function getCompanyServiceType(){
        return [
            1 => "Audit Firm",
            2 => "Startup",
            3 => "Web/Application Development",
            4 => "Enterprise Solution",
            5 => "Digital Marketing",
            6 => "Business Consulting",
            7 => "Recruitment",
            8 => "Other"
        ];
    }

}
