<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([ 'display_name' => 'عنوان الموقع (English)', 'display_name_en' => 'Site title (English)', 'key' => 'site_title', 'value' => 'Bloggi System', 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'شعار الموقع (English)', 'display_name_en' => 'Site Slogan (English)', 'key' => 'site_slogan', 'value' => 'Amazing blog', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'وصف الموقع (English)', 'display_name_en' => 'Site Description (English)', 'key' => 'site_description', 'value' => 'Bloggi Content management system', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'الكلمات المفتاحية (English)', 'display_name_en' => 'Site Keywords (English)', 'key' => 'site_keywords', 'value' => 'Bloggi, blog, multi writer', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'إيميل الموقع (English)', 'display_name_en' => 'Site Email (English)', 'key' => 'site_email', 'value' => 'admin@bloggi.test', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'حالة الموقع (English)', 'display_name_en' => 'Site Status (English)', 'key' => 'site_status', 'value' => 'Active', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'اسم الإداري (English)', 'display_name_en' => 'Admin Title (English)', 'key' => 'admin_title', 'value' => 'Bloggi', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'رقم الهاتف (English)', 'display_name_en' => 'Phone Number (English)', 'key' => 'phone_number', 'value' => '05123456789', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 8]);
        Setting::create([ 'display_name' => 'العنوان (English)',  'display_name_en' => 'Address (English)', 'key' => 'address', 'value' => 'M57F+QM King Abdulaziz International Airport, Jeddah', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 9]);
        Setting::create([ 'display_name' => 'خط العرض الخريطة (English)', 'display_name_en' => 'Map Latitude (English)', 'key' => 'address_latitude', 'value' => '21.671914', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 10]);
        Setting::create([ 'display_name' => 'خط الطول الخريطة (English)', 'display_name_en' => 'Map Longitude (English)', 'key' => 'address_longitude', 'value' => '39.173875', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'en', 'ordering' => 11]);
        Setting::create([ 'display_name' => 'Google Maps API Key (English)', 'display_name_en' => 'Google Maps API Key (English)', 'key' => 'google_maps_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'Google Recaptcha API Key (English)', 'display_name_en' => 'Google Recaptcha API Key (English)', 'key' => 'google_recaptcha_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'Google Analytics Client ID (English)', 'display_name_en' => 'Google Analytics Client ID (English)', 'key' => 'google_analytics_client_id', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'Facebook معرف (English)', 'display_name_en' => 'Facebook ID (English)', 'key' => 'facebook_id', 'value' => 'https://www.facebook.com/mindscms123', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'Twitter معرف (English)', 'display_name_en' => 'Twitter ID (English)', 'key' => 'twitter_id', 'value' => 'https://twitter.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'Instagram معرف (English)', 'display_name_en' => 'Instagram ID (English)', 'key' => 'instagram_id', 'value' => 'https://instagram.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'Patreon معرف (English)', 'display_name_en' => 'Patreon ID (English)', 'key' => 'flickr_id', 'value' => 'https://www.patreon.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'Youtube معرف (English)', 'display_name_en' => 'Youtube ID (English)', 'key' => 'youtube_id', 'value' => 'https://www.youtube.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'en', 'ordering' => 8]);

        Setting::create([ 'display_name' => 'عنوان الموقع (عربي)', 'display_name_en' => 'Site title (عربي)', 'key' => 'site_title', 'value' => 'Bloggi System', 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'شعار الموقع (عربي)', 'display_name_en' => 'Site Slogan (عربي)', 'key' => 'site_slogan', 'value' => 'Amazing blog', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'وصف الموقع (عربي)', 'display_name_en' => 'Site Description (عربي)', 'key' => 'site_description', 'value' => 'Bloggi Content management system', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'الكلمات المفتاحية (عربي)', 'display_name_en' => 'Site Keywords (عربي)', 'key' => 'site_keywords', 'value' => 'Bloggi, blog, multi writer', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'إيميل الموقع (عربي)', 'display_name_en' => 'Site Email (عربي)', 'key' => 'site_email', 'value' => 'admin@bloggi.test', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'حالة الموقع (عربي)', 'display_name_en' => 'Site Status (عربي)', 'key' => 'site_status', 'value' => 'Active', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'اسم الإداري (عربي)', 'display_name_en' => 'Admin Title (عربي)', 'key' => 'admin_title', 'value' => 'Bloggi', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'رقم الهاتف (عربي)', 'display_name_en' => 'Phone Number (عربي)', 'key' => 'phone_number', 'value' => '05123456789', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 8]);
        Setting::create([ 'display_name' => 'العنوان (عربي)',  'display_name_en' => 'Address (عربي)', 'key' => 'address', 'value' => 'M57F+QM King Abdulaziz International Airport, Jeddah', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 9]);
        Setting::create([ 'display_name' => 'خط العرض الخريطة (عربي)', 'display_name_en' => 'Map Latitude (عربي)', 'key' => 'address_latitude', 'value' => '21.671914', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 10]);
        Setting::create([ 'display_name' => 'خط الطول الخريطة (عربي)', 'display_name_en' => 'Map Longitude (عربي)', 'key' => 'address_longitude', 'value' => '39.173875', 'details' => null, 'type' => 'text', 'section' => 'general', 'lang' => 'ar', 'ordering' => 11]);
        Setting::create([ 'display_name' => 'Google Maps API Key (عربي)', 'display_name_en' => 'Google Maps API Key (عربي)', 'key' => 'google_maps_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'Google Recaptcha API Key (عربي)', 'display_name_en' => 'Google Recaptcha API Key (عربي)', 'key' => 'google_recaptcha_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'Google Analytics Client ID (عربي)', 'display_name_en' => 'Google Analytics Client ID (عربي)', 'key' => 'google_analytics_client_id', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'Facebook معرف (عربي)', 'display_name_en' => 'Facebook ID (عربي)', 'key' => 'facebook_id', 'value' => 'https://www.facebook.com/mindscms123', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'Twitter معرف (عربي)', 'display_name_en' => 'Twitter ID (عربي)', 'key' => 'twitter_id', 'value' => 'https://twitter.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'Instagram معرف (عربي)', 'display_name_en' => 'Instagram ID (عربي)', 'key' => 'instagram_id', 'value' => 'https://instagram.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'Patreon معرف (عربي)', 'display_name_en' => 'Patreon ID (عربي)', 'key' => 'flickr_id', 'value' => 'https://www.patreon.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'Youtube معرف (عربي)', 'display_name_en' => 'Youtube ID (عربي)', 'key' => 'youtube_id', 'value' => 'https://www.youtube.com/mindscms', 'details' => null, 'type' => 'text', 'section' => 'social_accounts', 'lang' => 'ar', 'ordering' => 8]);

    }
}
