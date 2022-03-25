<?php

namespace Database\Seeders;

use App\Models\translate;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        translate::create([
            'title' => 'visitor',
            'translate' => ['ar'=>'عدد الزائرين','en'=>'visitor']
        ]);

        translate::create([
        'title' => 'create menu',
        'translate' => ['ar'=>'انشاء عنصر في القائمة','en'=>'create Menu bar element']
    ]);
        translate::create([
            'title' => ' menu',
            'translate' => ['ar'=>' عنصر','en'=>' Menu bar ']
        ]);

        translate::create([
            'title' => 'Home',
            'translate' => ['ar'=>'الرائسية','en'=>'Home']

        ]);  translate::create([
        'title' => 'Create',
        'translate' => ['ar'=>'انشاء','en'=>'Create']

    ]);

        translate::create([
            'title' => 'delete',
            'translate' => ['ar'=>'حذف','en'=>'Delete']

        ]);

        translate::create([
            'title' => 'group',
            'translate' => ['ar'=>'مجموعة','en'=>'Group']

        ]);
        translate::create([
            'title' => 'edit',
            'translate' => ['ar'=>'تعديل','en'=>'Edit']

        ]);

        translate::create([
            'title' => 'update',
            'translate' => ['ar'=>'تحديث','en'=>'Update']

        ]);
        translate::create([
            'title' => 'show',
            'translate' => ['ar'=>'عرض','en'=>'Show']

        ]);

        translate::create([
            'title' => 'veiw',
            'translate' => ['ar'=>'عرض','en'=>'View']

        ]);
        translate::create([
            'title' => 'image',
            'translate' => ['ar'=>'صورة','en'=>'Image']

        ]);
        translate::create([
            'title' => 'Select bar',
            'translate' => ['ar'=>'اختر القائمة الهامشية','en'=>'Select navigation bar']

        ]);


        translate::create([
            'title' => 'admin setting',
            'translate' => ['ar'=>'اعدادات الادمن','en'=>'Admin setting']

        ]);
        translate::create([
            'title' => 'account setting',
            'translate' => ['ar'=>'اعدادات الحساب','en'=>'Account setting']

        ]);
        translate::create([
            'title' => 'securty  and privacy',
            'translate' => ['ar'=>'الامان و الخصوصية','en'=>'Securty  and privacy ']

        ]);
        translate::create([
            'title' => 'permission',
            'translate' => ['ar'=>'الصلاحيات','en'=>'Permissian ']

        ]);   translate::create([
        'title' => 'permission',
        'translate' => ['ar'=>'الصلاحيات','en'=>'Permissian ']

    ]);
        translate::create([
            'title' => 'role',
            'translate' => ['ar'=>'الاذونات','en'=>'Roles  ']

        ]);
        translate::create([
            'title' => 'guard type',
            'translate' => ['ar'=>'نوع الحماية','en'=>'Guard type ']

        ]);

        translate::create([
            'title' => 'groups',
            'translate' => ['ar'=>'المجموعات','en'=>'Group']

        ]);translate::create([
        'title' => 'site setting',
        'translate' => ['ar'=>'اعدادات الموقع','en'=>'Site setting']

    ]);
        translate::create([
            'title' => 'header sitting',
            'translate' => ['ar'=>'اعدادات الهيدر','en'=>'Header setting']

        ]);
        translate::create([
            'title' => 'logo',
            'translate' => ['ar'=>'اللوجو','en'=>'Logo']

        ]);translate::create([
        'title' => 'slider',
        'translate' => ['ar'=>'السليدر','en'=>'Slider']

    ]);translate::create([
        'title' => 'head bar',
        'translate' => ['ar'=>'اعداد القائمة العلوية','en'=>'Head bar']

    ]);translate::create([
        'title' => 'side menu',
        'translate' => ['ar'=>'اعداد القائمة  الجانبية','en'=>'Side menu']

    ]);translate::create([
        'title' => 'footer setting',
        'translate' => ['ar'=>'اعداد الفوتر ','en'=>'Footer setting']

    ]);translate::create([
        'title' => 'footer menu',
        'translate' => ['ar'=>'قوائم الفوتر','en'=>'Footer menu']

    ]);

        translate::create([
        'title' => 'about site',
        'translate' => ['ar'=>'نبذة عن الموقع','en'=>'About site']

    ]);
        translate::create([
        'title' => 'customize pages',
        'translate' => ['ar'=>'تخصيص الصفحات ','en'=>'Customize pages']

    ]);
        translate::create([
        'title' => 'copy right',
        'translate' => ['ar'=>'حقوق الملكية','en'=>'Copy right']

    ]);
        ;translate::create([
        'title' => 'social media setting',
        'translate' => ['ar'=>'اعداد وسائل التواصل ','en'=>'Social medial setting']

    ]);
        translate::create([
        'title' => 'phone',
        'translate' => ['ar'=>'التليفونات','en'=>'phones']

    ]);
        translate::create([
        'title' => 'social media links',
        'translate' => ['ar'=>'روابط التواصل','en'=>'Social media links']

    ]);
        translate::create([
        'title' => 'email',
        'translate' => ['ar'=>' الاليكتروني البريد','en'=>'email']

    ]);
        translate::create([
        'title' => 'address ',
        'translate' => ['ar'=>'العنوان','en'=>'Address ']

    ]);
        translate::create([
        'title' => 'general sittings ',
        'translate' => ['ar'=>'اعدادات عامة','en'=>'General setting']

    ]);
        translate::create([
            'title' => 'translation',
            'translate' => ['ar'=>'ترجمة','en'=>'Translation']

        ]);
        translate::create([
            'title' => 'logo',
            'translate' => ['ar'=>'العملة','en'=>'Logo']

        ]);
        translate::create([
            'title' => 'currency',
            'translate' => ['ar'=>'طرق الدفع','en'=>'}urrency']

        ]);
        translate::create([
            'title' => 'panel Setting',
            'translate' => ['ar'=>'اعدادات اللوحة','en'=>'Panel setting']

        ]);
        translate::create([
            'title' => 'payment',
            'translate' => ['ar'=>'طرق الدفع','en'=>'payment way']

        ]);
        translate::create([
            'title' => 'employee setting',
            'translate' => ['ar'=>'اعدادات الموظفين','en'=>'Employee setting']

        ]);
        translate::create([
            'title' => 'add user ',
            'translate' => ['ar'=>'اضافة موظف ','en'=>'Add user ']

        ]);
        translate::create([
            'title' => 'add employee',
            'translate' => ['ar'=>'عرض جميع الموظفين ','en'=>'Add employee']

        ]);

        translate::create([
            'title' => 'user setting',
            'translate' => ['ar'=>'اعدادات المستخدين','en'=>'User setting']

        ]);
        translate::create([
            'title' => 'view users',
            'translate' => ['ar'=>'عرض جميع المستخدمين ','en'=>'View user']

        ]);


        translate::create([
            'title' => 'page setting',
            'translate' => ['ar'=>'اعدادات الصفحات','en'=>'Page setting']

        ]);
        translate::create([
            'title' => 'view pages',
            'translate' => ['ar'=>'عرض جميع الصفحات ','en'=>'View pages']

        ]);
        translate::create([
            'title' => 'add page',
            'translate' => ['ar'=>'اضافة صفحة','en'=>'Add page']

        ]);

        translate::create([
            'title' => 'name',
            'translate' => ['ar'=>'الاسم','en'=>'name']

        ]);
        translate::create([
            'title' => 'arabic',
            'translate' => ['ar'=>'عربي','en'=>'arabic']

        ]);
        translate::create([
            'title' => 'english',
            'translate' => ['ar'=>'انجليزي','en'=>'English']

        ]);

        translate::create([
            'title' => 'button',
            'translate' => ['ar'=>'الزر','en'=>'Button']

        ]);
        translate::create([
        'title' => 'description',
        'translate' => ['ar'=>'الوصف','en'=>'Description']

    ]);

        translate::create([
            'title' => 'title',
            'translate' => ['ar'=>'العنوان','en'=>'Title']

        ]);

        translate::create([
            'title' => 'status',
            'translate' => ['ar'=>'الحالة','en'=>'Status']

        ]);
        translate::create([
            'title' => 'url',
            'translate' => ['ar'=>'اللينك','en'=>'Link']

        ]);  translate::create([
        'title' => 'department',
        'translate' => ['ar'=>'قسم','en'=>'Link']

    ]);
        translate::create([
            'title' => 'type',
            'translate' => ['ar'=>'اللينك','en'=>'Type']

        ]);
        translate::create([
            'title' => 'passsword',
            'translate' => ['ar'=>'كلمة المرور','en'=>'passsword']

        ]);
        translate::create([
            'title' => 'repeat password',
            'translate' => ['ar'=>'اعد كتابة كلمة المرور','en'=>'Repeat password']

        ]);
        translate::create([
            'title' => 'country',
            'translate' => ['ar'=>'الدولة ','en'=>'country']

        ]);
        translate::create([
            'title' => 'state',
            'translate' => ['ar'=>'المحافظة','en'=>'state']

        ]);
        translate::create([
            'title' => 'city',
            'translate' => ['ar'=>'المدينة','en'=>'country']

        ]);
        translate::create([
        'title' => 'mobile',
        'translate' => ['ar'=>'الهاتف الجوال','en'=>'mobile']

    ]);

        translate::create([
            'title' => 'work',
            'translate' => ['ar'=>'مفعل','en'=>'work']

        ]);

        translate::create([
            'title' => 'unwork',
            'translate' => ['ar'=>'غير مفعل','en'=>'unwork']

        ]);

        translate::create([
            'title' => 'new password',
            'translate' => ['ar'=>'كلمة المرور الجديدة','en'=>'the new password']

        ]);

        translate::create([
            'title' => 'sub menu',
            'translate' => ['ar'=>' عنصر فرعي ','en'=>'Sub menu']

        ]);

        translate::create([
            'title' => 'pages',
            'translate' => ['ar'=>' الصفحات','en'=>'Pages']

        ]);

        translate::create([
            'title' => 'successfully',
            'translate' => ['ar'=>' بنجاح','en'=>'successfully']

        ]);
        translate::create([
            'title' => 'done',
            'translate' => ['ar'=>' تمت عميية','en'=>'process has been done']

        ]);
        translate::create([
        'title' => 'employee',
        'translate' => ['ar'=>' الموظفين','en'=>'Employees']

    ]);
        translate::create([
            'title' => 'icon',
            'translate' => ['ar'=>' ايكون','en'=>'Icon']

        ]);
    }

}
