<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDefaultDataForCms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();

        $cms_site_details = array(
            array('id' => '1','site_key' => 'faqs','site_value' => '[{"question":"Why should we switch to cloud-based business management software compared to traditional desktop software?","answer":"Cloud-based software provides you a low-cost, secure & mobile software solutions. Compared to traditional software that requires it to install on a computer - cloud-based can be accessed from anywhere without any hardware dependency."},{"question":"How secure is my business data?","answer":"All data are stored in our centralized database which is highly protected with multi-layers of privileges. We takes regular frequency interval automated backup to protect from any unwanted consequences."},{"question":"Whom should I reach out to in case of any problems?","answer":"Please contact our support, write us in the contact section or call to the number mentioned. You\'re assured to receive a response in a maximum of 24 hours."},{"question":"Is this POS application Free?","answer":"We do provide a free tier for very small business or business that is about to start. To take more advantage of this POS software we recommend that you upgrade to a better plan that unlocks more features."},{"question":"Do you provide consultancy or implementation solutions for using this POS software?","answer":"Yes, with a pro plan you can connect with one of our experts who will help you with implementing the solution for your business."},{"question":"Are there any additional hardware required or subscription charges?","answer":"This is cloud-based software. You\'ll only need a device with an internet connection & chrome browser. It runs within the browser. No additional hardware is required. But you can use some hardware like barcode scanners, and printers for your convenience to speed up work."}]','created_at' => '2022-09-13 18:44:10','updated_at' => '2022-10-20 17:16:28'),
            array('id' => '2','site_key' => 'statistics','site_value' => '{"tagline":"POS\'s Stats & Numbers","description":"More & More businesses are adopting our cloud-based business management solution","content":[{"stats":"75","title":"REGISTERED BUSINESSES"},{"stats":"400+","title":"DAILY USERS"},{"stats":"50K","title":"INVOICES CREATED"},{"stats":"126+","title":"ONLINE RESOURCES"}]}','created_at' => '2022-09-13 18:44:10','updated_at' => '2022-10-20 17:08:07'),
            array('id' => '3','site_key' => 'google_analytics','site_value' => 'null','created_at' => '2022-09-14 11:14:40','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '4','site_key' => 'fb_pixel','site_value' => 'null','created_at' => '2022-09-14 11:14:40','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '5','site_key' => 'custom_js','site_value' => 'null','created_at' => '2022-09-14 11:14:40','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '6','site_key' => 'custom_css','site_value' => 'null','created_at' => '2022-09-14 11:14:40','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '7','site_key' => 'meta_tags','site_value' => 'null','created_at' => '2022-09-14 11:14:40','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '8','site_key' => 'chat_widget','site_value' => 'null','created_at' => '2022-09-14 11:27:14','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '9','site_key' => 'contact_us','site_value' => '[{"label":"Call","num":"0000000000"},{"label":"Support","num":"0000000000"},{"label":"Enquiry","num":"0000000000"}]','created_at' => '2022-09-14 12:24:38','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '10','site_key' => 'mail_us','site_value' => '[{"label":"Contact","email":"contact@example.com"},{"label":"Support","email":"support@example.com"}]','created_at' => '2022-09-14 12:24:38','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '11','site_key' => 'follow_us','site_value' => '{"facebook":"https:\\/\\/www.facebook.com\\/test","instagram":"https:\\/\\/www.instagram.com\\/test","twitter":"https:\\/\\/twitter.com\\/test","linkedin":"https:\\/\\/in.linkedin.com\\/company\\/test","youtube":"https:\\/\\/www.youtube.com\\/c\\/test"}','created_at' => '2022-09-14 12:35:39','updated_at' => '2022-10-20 17:08:07'),
            array('id' => '12','site_key' => 'logo','site_value' => 'null','created_at' => '2022-09-14 13:38:53','updated_at' => '2022-09-16 11:49:09'),
            array('id' => '13','site_key' => 'notifiable_email','site_value' => '"notifyme@example.com"','created_at' => '2022-09-14 13:38:53','updated_at' => '2022-09-16 11:49:09')
          );
          
        DB::table('cms_site_details')->insert($cms_site_details);


        $cms_pages = array(
            array('id' => '1','type' => 'testimonial','layout' => NULL,'title' => 'David Parr','content' => '<p class="testimonial-card-1__paragraph mb-3">This software has become one of the backbones of our business. It helped us streamline the data of all our warehouses &amp; shops on one platform. I am not much of a techy guy but the admin panel also allows you to customize every aspect of the application.</p>
          <p class="testimonial-card-1__paragraph mb-3">All the reports help me to give an overview of different aspects of our business.</p>
          <p class="testimonial-card-1__paragraph mb-3">It is very powerful!</p>','meta_description' => NULL,'tags' => NULL,'feature_image' => NULL,'priority' => '3','created_by' => '9','is_enabled' => '1','created_at' => '2022-08-19 11:25:05','updated_at' => '2022-10-20 17:48:29'),
            array('id' => '2','type' => 'testimonial','layout' => NULL,'title' => 'Tim Johnson','content' => '<p>It is truly designed to help my business run more smoothly and efficiently. I can now track and manage inventory, customer information, and sales easily. The installation was quick and easy, and the interface is very user-friendly. I can now manage almost every business operation with one single software!</p>','meta_description' => NULL,'tags' => NULL,'feature_image' => NULL,'priority' => NULL,'created_by' => '1','is_enabled' => '1','created_at' => '2022-09-10 16:07:17','updated_at' => '2022-10-20 17:23:39'),
            array('id' => '3','type' => 'page','layout' => 'home','title' => 'Automate your business management at very-Low cost','content' => '<p>Best POS, Invoicing, Inventory &amp; Service management application for your growing business!</p>','meta_description' => NULL,'tags' => NULL,'feature_image' => NULL,'priority' => '1','created_by' => '0','is_enabled' => '1','created_at' => '2022-09-10 16:26:24','updated_at' => '2022-10-20 16:30:15'),
            array('id' => '4','type' => 'page','layout' => 'contact','title' => 'Contact Us','content' => '<p>We\'re happy to receive your message. Ask us anything, we\'ll respond as soon as possible.</p>','meta_description' => NULL,'tags' => NULL,'feature_image' => NULL,'priority' => NULL,'created_by' => '0','is_enabled' => '1','created_at' => '2022-09-10 16:26:24','updated_at' => '2022-09-16 12:04:20'),
            array('id' => '5','type' => 'testimonial','layout' => NULL,'title' => 'Krishna Watt','content' => '<p>We have used this for 9 months now. It has helped our business grow by leaps and bounds. The interface and its simplicity have made it easy for us to learn and get familiar with. The best thing about this software is that it is cloud-based and we can use it from our shop, warehouse, or mobile while traveling. I can also see its potential as we continue to grow. Highly Satisfied!</p>','meta_description' => NULL,'tags' => NULL,'feature_image' => NULL,'priority' => NULL,'created_by' => '1','is_enabled' => '1','created_at' => '2022-09-16 12:07:25','updated_at' => '2022-10-20 17:27:31')
          );
        DB::table('cms_pages')->insert($cms_pages);

        $cms_page_metas = array(
            array('id' => '1','cms_page_id' => '3','meta_key' => 'industry','meta_value' => '{"id":"1","title":"We\'re Ready For Your Business!","description":"<p>If you\'re in need of business management software, you\'ve come to the right place.&nbsp;<\\/p>\\r\\n<p>We have a clean, modern modular design that is sure to fit your business!<\\/p>","content":[{"icon":"fas fa-store-alt","title":"Departmental Store","description":"Looking for a software solution that can help you manage and sell all of your essential items in one place? Look no further than our one-stop departmental store software. Whether you need to sell clothes, shoes, bags, or any other type of item, our software has you covered. Plus, our easy-to-use interface makes it simple to get started selling right away. So why wait? Get started today!"},{"icon":"fas fa-store","title":"Retail & Wholesale","description":"A complete suite of features to manage both retail & wholesales stores. Set multiple prices for different customer segments or different business locations."},{"icon":"fas fa-notes-medical","title":"Pharmacy","description":"Our software is perfect for any pharmaceutical company. You can set product expiration dates and lot numbers, and sell in different units of measure. Stop selling expired & to-be-expired items to customers. Check details reports on stock expiry by lot numbers"},{"icon":"fas fa-prescription-bottle","title":"Liquor","description":"Easy to use for every liquor shop. Sell in ml of simple sell the bottle, you can easily manage them."},{"icon":"fas fa-mobile-alt","title":"Mobile & Electronics","description":"Record inventory serial number, sell items with particular serial number,"},{"icon":"fas fa-wrench","title":"Repair Shop","description":"A complete suite of features to manage repair business, create job sheet, assign job sheet to technician, repair status, convert job sheet to invoices. Self link for customers to check repair progress"},{"icon":"fas fa-home","title":null,"description":null},{"icon":"fas fa-home","title":null,"description":null}]}','created_at' => NULL,'updated_at' => '2022-10-20 16:30:15'),
            array('id' => '2','cms_page_id' => '3','meta_key' => 'feature','meta_value' => '{"id":"2","title":"Features to skyrocket \\ud83d\\ude80 your business growth","description":"<p>The pace of business growth has never been faster.<\\/p>\\r\\n<p>That\'s why we&rsquo;ve designed our cloud-based POS software to help you get ahead.<\\/p>\\r\\n<p>The easiest, most reliable way to grow and manage your business is right at your fingertips with our cloud-based POS and inventory management system.<\\/p>\\r\\n<p>Right software can be a lifesaver for your business, and with it, you can revolutionize your business\'s growth<\\/p>","content":[{"icon":"fas fa-cloud","title":"Access Anywhere!","description":"Check your business data from anywhere, anytime. \\r\\nSee live updates in realtime"},{"icon":"fas fa-check-double","title":"No Installation","description":"No software to install, No hardware dependency. Just open browser & start using."},{"icon":"fas fa-sitemap","title":"MultiBranches & Warehouse","description":"Manage stock of multiple branches  in one place effortlessly & real-time."},{"icon":"fas fa-user-lock","title":"User access limit","description":"Powerful user Role & Permission management to limit employees  access to business data"},{"icon":"fas fa-cubes","title":"Stock Management","description":"Manage stocks with from multiple locations, stock expiry, lot number, stock history & much more."},{"icon":"fas fa-wrench","title":"Service Management","description":"Manage & easily invoice for services. Also dedicated repair service management features to schedule & deliver services on time"},{"icon":"fas fa-users","title":"HR Management","description":"With HR management easily track daily attendance, shift management, leaves, payroll, Holidays, Departments,  & Designations"},{"icon":"fas fa-handshake","title":"Customer Management","description":"CRM module help you to track leads lifecycle, followup with leads, sources, followup, launch campaigns, proposals and lot more"},{"icon":"fas fa-hand-peace","title":"Simplified Interface","description":"Simple to use interface to get work done in few clicks. Save your time & make it easy for staffs to use."},{"icon":"fas fa-chart-line","title":"Reports","description":"Comes inbuilt with lot of report to help business owners analyse every revenue, inventory, payments & human resource."}]}','created_at' => '2022-09-15 15:34:41','updated_at' => '2022-10-20 15:39:11')
          );
        DB::table('cms_page_metas')->insert($cms_page_metas);
        
        DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
