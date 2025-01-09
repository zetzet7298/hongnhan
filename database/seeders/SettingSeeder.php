<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\User;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['key' => 'loading-text', 'value' => 'Bình Hưng Hồng Nhàn', 'type' => 'common'],
            ['key' => 'company-name', 'value' => 'Bình Hưng Hồng Nhàn', 'type' => 'common'],
            ['key' => 'logo', 'value' => 'media/logo.png', 'type' => 'common'], // Thêm đường dẫn logo
            ['key' => 'mission', 'value' => 'Mang đến trải nghiệm du lịch tuyệt vời và dịch vụ chất lượng cao cho du khách', 'type' => 'common'],
            ['key' => 'address', 'value' => 'Đảo Bình Hưng. Cam Ranh. Tỉnh Khánh Hòa', 'type' => 'common'],
            ['key' => 'phone', 'value' => '+84942704480', 'type' => 'common'],
            ['key' => 'email', 'value' => 'contact@hongnhan.com', 'type' => 'common'],
            ['key' => 'price_quote', 'value' => 'Bình Hưng Hồng Nhàn luôn tư vấn dịch vụ miễn phí.', 'type' => 'common'],
            ['key' => 'time-working', 'value' => '', 'type' => 'common'],
            ['key' => 'dkkd', 'value' => '', 'type' => 'common'],
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/binhhunghongnhan', 'type' => 'common'],
            ['key' => 'zalo', 'value' => 'https://zalo.me/0857357276', 'type' => 'common'],
            ['key' => 'messenger', 'value' => 'https://m.me/binhhunghongnhan', 'type' => 'common'],
            ['key' => 'tiktok', 'value' => 'https://www.tiktok.com/@hng.nhn.tour.bnh', 'type' => 'common'],
            ['key' => 'linkedin', 'value' => '', 'type' => 'common'],
            ['key' => 'instagram', 'value' => '', 'type' => 'common'],
            ['key' => 'youtube', 'value' => 'https://www.youtube.com/channel/UCSmSxS5BucpuDUELoMmPYqA', 'type' => 'common'],
            ['key' => 'google_map', 'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5685.498844405328!2d109.21051585233154!3d11.778708613335619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317095d94c2e2e5d%3A0x4ef6d03a07a4a602!2zTmjDoCBCw6ggSOG7k25nIE5ow6Bu!5e0!3m2!1svi!2s!4v1721965312416!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'type' => 'common'],

            ['key' => 'about-title', 'value' => 'Khám Phá Đảo Bình Hưng Với Hồng Nhàn', 'type' => 'dashboard'],
            ['key' => 'about-desc', 'value' => 'Hãy cùng chúng tôi khám phá vẻ đẹp hoang sơ và trải nghiệm những dịch vụ du lịch chất lượng tại đảo Bình Hưng. Từ các tour tham quan, trải nghiệm văn hóa địa phương đến dịch vụ khách sạn, ẩm thực đặc sắc, Hồng Nhàn sẽ mang đến cho bạn một chuyến đi đáng nhớ.', 'type' => 'dashboard'],
            ['key' => 'slider-1', 'value' => '', 'type' => 'dashboard'],
            ['key' => 'slider-2', 'value' => '', 'type' => 'dashboard'],
            ['key' => 'slider-3', 'value' => '', 'type' => 'dashboard'],
            ['key' => 'solution-title', 'value' => 'Dịch vụ du lịch đảo Bình Hưng', 'type' => 'dashboard'],
            ['key' => 'solution-description', 'value' => 'Chúng tôi cung cấp các tour du lịch đa dạng và dịch vụ hoàn hảo để bạn có thể khám phá hết vẻ đẹp của đảo Bình Hưng. Đội ngũ chuyên nghiệp của Hồng Nhàn luôn sẵn sàng hỗ trợ và đồng hành cùng bạn trong suốt chuyến đi.', 'type' => 'dashboard'],

            ['key' => 'title', 'value' => 'Tin tức', 'type' => 'post'],
            ['key' => 'description', 'value' => 'Cập nhật những thông tin mới nhất về du lịch đảo Bình Hưng và các dịch vụ của Hồng Nhàn', 'type' => 'post'],
            ['key' => 'banner', 'value' => '', 'type' => 'post'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'post'],

            ['key' => 'title', 'value' => 'Góc Tuyển Dụng', 'type' => 'hr'],
            ['key' => 'description', 'value' => 'Tham gia vào đội ngũ chuyên nghiệp của Hồng Nhàn và cùng nhau xây dựng những trải nghiệm du lịch tuyệt vời', 'type' => 'hr'],
            ['key' => 'banner', 'value' => 'media/hr-banner.jpg', 'type' => 'hr'],
            ['key' => 'banner_mobile', 'value' => 'media/hr-banner-mobile.jpg', 'type' => 'hr'],

            ['key' => 'title', 'value' => 'Tuyển Dụng', 'type' => 'recruitment'],
            ['key' => 'description', 'value' => 'Gia nhập đội ngũ Bình Hưng Hồng Nhàn và trở thành một phần của hành trình phát triển du lịch Bình Hưng', 'type' => 'recruitment'],
            ['key' => 'banner', 'value' => 'media/recruitment-banner.jpg', 'type' => 'recruitment'],
            ['key' => 'banner_mobile', 'value' => 'media/recruitment-banner-mobile.jpg', 'type' => 'recruitment'],
            ['key' => 'avatar_post', 'value' => 'media/avatar-recruitment.jpg', 'type' => 'recruitment'],

            ['key' => 'banner', 'value' => 'media/service-banner.jpg', 'type' => 'service'],
            ['key' => 'banner_mobile', 'value' => 'media/service-banner-mobile.jpg', 'type' => 'service'],
            ['key' => 'title', 'value' => 'Dịch vụ', 'type' => 'service'],
            ['key' => 'description', 'value' => 'Trải nghiệm du lịch đảo Bình Hưng và các dịch vụ của Hồng Nhàn', 'type' => 'service'],
            ['key' => 'nangtam_banner', 'value' => 'media/nangtam-banner.jpg', 'type' => 'service'],
            ['key' => 'nangtam_title', 'value' => 'Hãy để Bình Hưng Hồng Nhàn thanh lọc những bộn bề, áp lực trong công việc của bạn', 'type' => 'service'],
            ['key' => 'giatri_title', 'value' => 'Giá trị khác biệt tại Bình Hưng Hồng Nhàn', 'type' => 'service'],
            ['key' => 'giatri_description', 'value' => 'Chúng tôi sở hữu đội ngũ chuyên nghiệp và giàu kinh nghiệm, luôn sẵn sàng mang đến cho bạn những trải nghiệm du lịch tốt nhất.', 'type' => 'service'],
            ['key' => 'giatri_item_1', 'value' => 'Chất lượng', 'type' => 'service'],
            ['key' => 'giatri_item_2', 'value' => 'Kinh nghiệm', 'type' => 'service'],
            ['key' => 'giatri_item_3', 'value' => 'Sáng tạo', 'type' => 'service'],
            ['key' => 'giatri_item_4', 'value' => 'Tận tâm', 'type' => 'service'],
            ['key' => 'giatri_item_1_val', 'value' => 'Cam kết mang đến dịch vụ du lịch chất lượng và trải nghiệm đáng nhớ cho du khách.', 'type' => 'service'],
            ['key' => 'giatri_item_2_val', 'value' => 'Đội ngũ với nhiều năm kinh nghiệm trong ngành du lịch, luôn hiểu và đáp ứng nhu cầu của khách hàng.', 'type' => 'service'],
            ['key' => 'giatri_item_3_val', 'value' => 'Luôn sáng tạo và đổi mới để mang đến những trải nghiệm du lịch độc đáo và thú vị.', 'type' => 'service'],
            ['key' => 'giatri_item_4_val', 'value' => 'Tận tâm và nhiệt tình trong mọi dịch vụ, đảm bảo sự hài lòng của khách hàng.', 'type' => 'service'],

            ['key' => 'banner', 'value' => 'media/about-banner.jpg', 'type' => 'about'],
            ['key' => 'banner_mobile', 'value' => 'media/about-banner-mobile.jpg', 'type' => 'about'],
            ['key' => 'title', 'value' => 'Chúng Tôi', 'type' => 'about'],
            ['key' => 'description', 'value' => 'Sở hữu 14 năm kinh nghiệm tổ chức tour Bình Hưng', 'type' => 'about'],
            ['key' => 'gioithieu_title', 'value' => 'Chúng tôi', 'type' => 'about'],
            ['key' => 'gioithieu_description', 'value' => 'Chúng tôi là những chuyên gia du lịch tại Bình Hưng, luôn mang đến những trải nghiệm độc đáo và chất lượng cho du khách.', 'type' => 'about'],
            ['key' => 'camnhan_title', 'value' => 'Cảm nhận từ khách hàng', 'type' => 'about'],
            ['key' => 'camnhan_description', 'value' => 'Khách hàng luôn tin tưởng và hài lòng với dịch vụ của Bình Hưng Hồng Nhàn', 'type' => 'about'],
            ['key' => 'dichvu_banner', 'value' => '', 'type' => 'about'],
            ['key' => 'giatri_title', 'value' => 'Giá trị khác biệt tại Hồng Nhàn Tour', 'type' => 'about'],
            ['key' => 'giatri_description', 'value' => 'Hồng Nhàn Tour mang đến trải nghiệm du lịch độc đáo với dịch vụ tận tâm và chuyên nghiệp tại đảo Bình Hưng. Đội ngũ chúng tôi luôn sẵn sàng đồng hành và hỗ trợ bạn trong mỗi hành trình.', 'type' => 'about'],
            ['key' => 'giatri_item_1', 'value' => 'Sáng tạo', 'type' => 'about'],
            ['key' => 'giatri_item_2', 'value' => 'Kinh nghiệm', 'type' => 'about'],
            ['key' => 'giatri_item_3', 'value' => 'Thấu hiểu', 'type' => 'about'],
            ['key' => 'giatri_item_4', 'value' => 'Đa dạng', 'type' => 'about'],
            ['key' => 'giatri_item_1_val', 'value' => 'Chúng tôi sáng tạo trong việc thiết kế các tour du lịch và cập nhật xu hướng mới nhất. Dịch vụ của bạn sẽ là sự kết hợp hoàn hảo của sáng tạo và chất lượng.', 'type' => 'about'],
            ['key' => 'giatri_item_2_val', 'value' => 'Với nhiều năm kinh nghiệm trong ngành du lịch, đội ngũ của Hồng Nhàn Tour cam kết mang đến giải pháp hiệu quả và tiết kiệm cho bạn.', 'type' => 'about'],
            ['key' => 'giatri_item_3_val', 'value' => 'Chúng tôi hiểu rõ nhu cầu và mong muốn của bạn để cung cấp dịch vụ phù hợp nhất trong mỗi chuyến đi.', 'type' => 'about'],
            ['key' => 'giatri_item_4_val', 'value' => 'Hồng Nhàn Tour cung cấp đa dạng dịch vụ du lịch, đảm bảo mỗi chuyến đi của bạn đều trọn vẹn và đáng nhớ.', 'type' => 'about'],
            ['key' => 'video', 'value' => '', 'type' => 'about'],
            ['key' => 'video_avatar', 'value' => '', 'type' => 'about'],
            ['key' => 'video_title', 'value' => 'Nâng cao chất lượng dịch vụ du lịch', 'type' => 'about'],
            ['key' => 'video_description', 'value' => 'Chúng tôi không ngừng cải tiến và nâng cao chất lượng dịch vụ để mang đến cho bạn trải nghiệm du lịch tốt nhất tại đảo Bình Hưng. Đội ngũ hỗ trợ của chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc của bạn 24/7.', 'type' => 'about'],
            ['key' => 'chienloipham_banner', 'value' => '', 'type' => 'about'],
            ['key' => 'chienloipham_title', 'value' => '', 'type' => 'about'],
            ['key' => 'chienloipham_description', 'value' => '', 'type' => 'about'],
            ['key' => 'diemdadang_banner', 'value' => '', 'type' => 'about'],
            ['key' => 'diemdadang_title', 'value' => '', 'type' => 'about'],
            ['key' => 'diemdadang_item_1', 'value' => 'Khám phá đảo Bình Hưng độc đáo', 'type' => 'about'],
            ['key' => 'diemdadang_item_2', 'value' => 'Hỗ trợ khách hàng tận tâm', 'type' => 'about'],
            ['key' => 'diemdadang_item_3', 'value' => 'Tour du lịch chất lượng cao', 'type' => 'about'],
            ['key' => 'diemdadang_item_4', 'value' => 'Dịch vụ đa dạng và phong phú', 'type' => 'about'],

            ['key' => 'banner', 'value' => '', 'type' => 'chitietbaiviet'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'chitietbaiviet'],

            ['key' => 'bocongthuong_link', 'value' => '', 'type' => 'common'],
            ['key' => 'h1', 'value' => 'Dịch Vụ Du Lịch Đảo Bình Hưng Tại Hồng Nhàn Tour', 'type' => 'service'],
            ['key' => 'h1', 'value' => 'Cơ Hội Nghề Nghiệp Tại Hồng Nhàn Tour', 'type' => 'recruitment'],
            ['key' => 'h1', 'value' => 'Giới Thiệu Hồng Nhàn Tour - Khám Phá Đảo Bình Hưng', 'type' => 'about'],
            ['key' => 'h1', 'value' => 'Đội Ngũ Nhân Sự Tại Hồng Nhàn Tour', 'type' => 'hr'],
            ['key' => 'h1', 'value' => 'Bài Viết Mới Nhất Về Du Lịch Bình Hưng', 'type' => 'post'],
            ['key' => 'h1', 'value' => 'Khám Phá Đảo Bình Hưng Với Hồng Nhàn', 'type' => 'dashboard'],


            ['key' => 'name', 'value' => 'Bình Hưng Hồng Nhàn', 'type' => 'localbusiness'],
            ['key' => 'images', 'value' => '[
                    "https://example.com/photos/1x1/photo.jpg",
                    "https://example.com/photos/4x3/photo.jpg",
                    "https://example.com/photos/16x9/photo.jpg"
                ]', 'type' => 'localbusiness'],
            ['key' => 'street_address', 'value' => 'Đảo Bình Hưng', 'type' => 'localbusiness'],
            ['key' => 'address_locality', 'value' => 'Cam Ranh', 'type' => 'localbusiness'],
            ['key' => 'address_region', 'value' => 'Khánh Hòa', 'type' => 'localbusiness'],
            ['key' => 'postal_code', 'value' => '57000', 'type' => 'localbusiness'],
            ['key' => 'address_country', 'value' => 'VN', 'type' => 'localbusiness'],
            ['key' => 'latitude', 'value' => '11.779416177653987', 'type' => 'localbusiness'],
            ['key' => 'longitude', 'value' => '109.21311189918191', 'type' => 'localbusiness'],
            ['key' => 'url', 'value' => 'http://hongnhan.local:3334', 'type' => 'localbusiness'],
            ['key' => 'price_range', 'value' => '₫₫₫', 'type' => 'localbusiness'],
            ['key' => 'telephone', 'value' => '0942 704 480 - 0857 357 276', 'type' => 'localbusiness'],
            ['key' => 'opening_hours', 'value' => '[
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                      "Monday",
                      "Tuesday",
                      "Wednesday",
                      "Thursday",
                      "Friday",
                      "Saturday",
                      "Sunday"
                    ],
                    "opens": "00:00",
                    "closes": "23:59"
                  }
                ]', 'type' => 'localbusiness']
        ];

        // foreach ($settings as $setting) {
        //     \App\Models\Setting::updateOrCreate(
        //         ['key' => $setting['key'], 'type' => $setting['type']], 
        //         ['value' => $setting['value']]
        //     );
        // }
        foreach ($settings as $setting) {
            $existingSetting = \App\Models\Setting::where(['key' => $setting['key'], 'type' => $setting['type']])->first();
            if (!$existingSetting) {
                \App\Models\Setting::create($setting);
            }
        }
        User::where('id', 1)->update([
            'roles' => json_encode([
                'common',
                'service',
                'recruitment',
                'about',
                'hr',
                'post',
                'dashboard',
                'feedback',
                'solution',
                'office',
                'specialty',
                'employee',
                'category',
                'seo',
                'edit',
                'delete',
            ]), 'phone' => '0349403089'
        ]);
        $seos = [
            [
                'meta_title' => 'Trang Chủ - Hồng Nhàn Tour',
                'meta_description' => 'Khám phá trang chủ của Hồng Nhàn Tour - Dịch vụ du lịch chất lượng tại đảo Bình Hưng.',
                'meta_url' => route('trangchu'),
                'meta_keywords' => 'trang chủ, du lịch Bình Hưng, Hồng Nhàn Tour',
                'meta_site_name' => 'Hồng Nhàn Tour',
                'meta_image_alt' => 'Trang Chủ - Du lịch Bình Hưng',
                'og_locale' => 'vi_VN',
                'fb_app_id' => '',
                'og_type' => 'website',
                'og_title' => 'Trang Chủ - Hồng Nhàn Tour',
                'og_description' => 'Khám phá trang chủ của Hồng Nhàn Tour - Dịch vụ du lịch chất lượng tại đảo Bình Hưng.',
                'og_url' => route('trangchu'),
                'og_site_name' => 'Hồng Nhàn Tour',
                'og_image' => 'https://www.facebook.com/photo?fbid=122158025840162400&set=a.122106419096162400',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_title' => '',
                'twitter_description' => '',
                'twitter_image' => '',
                'twitter_creator' => '',
                'canonical' => route('trangchu'),
                'meta_robots' => 'index, follow',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Giới Thiệu - Hồng Nhàn Tour',
                'meta_description' => 'Tìm hiểu về Hồng Nhàn Tour và dịch vụ du lịch đảo Bình Hưng của chúng tôi.',
                'meta_url' => route('gioithieu'),
                'meta_keywords' => 'giới thiệu, Hồng Nhàn Tour, du lịch Bình Hưng',
                'meta_site_name' => 'Hồng Nhàn Tour',
                'meta_image_alt' => 'Giới Thiệu - Hồng Nhàn Tour',
                'og_locale' => 'vi_VN',
                'fb_app_id' => '',
                'og_type' => 'website',
                'og_title' => 'Giới Thiệu - Hồng Nhàn Tour',
                'og_description' => 'Tìm hiểu về Hồng Nhàn Tour và dịch vụ du lịch đảo Bình Hưng của chúng tôi.',
                'og_url' => route('gioithieu'),
                'og_site_name' => 'Hồng Nhàn Tour',
                'og_image' => 'https://www.facebook.com/photo?fbid=122158025840162400&set=a.122106419096162400',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_title' => '',
                'twitter_description' => '',
                'twitter_image' => '',
                'twitter_creator' => '',
                'canonical' => route('gioithieu'),
                'meta_robots' => 'index, follow',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Dịch Vụ - Hồng Nhàn Tour',
                'meta_description' => 'Khám phá các dịch vụ du lịch tại đảo Bình Hưng của Hồng Nhàn Tour.',
                'meta_url' => route('dichvu'),
                'meta_keywords' => 'dịch vụ, Hồng Nhàn Tour, du lịch Bình Hưng',
                'meta_site_name' => 'Hồng Nhàn Tour',
                'meta_image_alt' => 'Dịch Vụ - Hồng Nhàn Tour',
                'og_locale' => 'vi_VN',
                'fb_app_id' => '',
                'og_type' => 'website',
                'og_title' => 'Dịch Vụ - Hồng Nhàn Tour',
                'og_description' => 'Khám phá các dịch vụ du lịch tại đảo Bình Hưng của Hồng Nhàn Tour.',
                'og_url' => route('dichvu'),
                'og_site_name' => 'Hồng Nhàn Tour',
                'og_image' => 'https://www.facebook.com/photo?fbid=122158025840162400&set=a.122106419096162400',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_title' => '',
                'twitter_description' => '',
                'twitter_image' => '',
                'twitter_creator' => '',
                'canonical' => route('dichvu'),
                'meta_robots' => 'index, follow',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Bài Viết - Hồng Nhàn Tour',
                'meta_description' => 'Xem các bài viết và tin tức mới nhất về du lịch Bình Hưng từ Hồng Nhàn Tour.',
                'meta_url' => route('tintuc'),
                'meta_keywords' => 'bài viết, tin tức, du lịch Bình Hưng, Hồng Nhàn Tour',
                'meta_site_name' => 'Hồng Nhàn Tour',
                'meta_image_alt' => 'Bài Viết - Hồng Nhàn Tour',
                'og_locale' => 'vi_VN',
                'fb_app_id' => '',
                'og_type' => 'website',
                'og_title' => 'Bài Viết - Hồng Nhàn Tour',
                'og_description' => 'Xem các bài viết và tin tức mới nhất về du lịch Bình Hưng từ Hồng Nhàn Tour.',
                'og_url' => route('tintuc'),
                'og_site_name' => 'Hồng Nhàn Tour',
                'og_image' => 'https://www.facebook.com/photo?fbid=122158025840162400&set=a.122106419096162400',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_title' => '',
                'twitter_description' => '',
                'twitter_image' => '',
                'twitter_creator' => '',
                'canonical' => route('tintuc'),
                'meta_robots' => 'index, follow',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Liên Hệ - Hồng Nhàn Tour',
                'meta_description' => 'Liên hệ với chúng tôi để biết thêm thông tin về du lịch đảo Bình Hưng.',
                'meta_url' => route('lienhe'),
                'meta_keywords' => 'liên hệ, contact, du lịch Bình Hưng, Hồng Nhàn Tour',
                'meta_site_name' => 'Hồng Nhàn Tour',
                'meta_image_alt' => 'Liên Hệ - Hồng Nhàn Tour',
                'og_locale' => 'vi_VN',
                'fb_app_id' => '',
                'og_type' => 'website',
                'og_title' => 'Liên Hệ - Hồng Nhàn Tour',
                'og_description' => 'Liên hệ với chúng tôi để biết thêm thông tin về du lịch đảo Bình Hưng.',
                'og_url' => route('lienhe'),
                'og_site_name' => 'Hồng Nhàn Tour',
                'og_image' => 'https://www.facebook.com/photo?fbid=122158025840162400&set=a.122106419096162400',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_title' => '',
                'twitter_description' => '',
                'twitter_image' => '',
                'twitter_creator' => '',
                'canonical' => route('lienhe'),
                'meta_robots' => 'index, follow',
                'alternate_hreflang' => 'vi'
            ]
        ];



        foreach ($seos as $seo) {
            // Kiểm tra xem bản ghi đã tồn tại chưa
            $existingSeo = Seo::where('meta_url', $seo['meta_url'])->first();

            // Nếu không tồn tại, thêm mới bản ghi
            if (!$existingSeo) {
                Seo::create($seo);
            }
        }
    }
}
