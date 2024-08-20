<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Plugin administration pages are defined here.
 *
 * @package     local_levitate
 * @copyright   2023, Human Logic Software LLC
 * @author     Sreenu Malae <sreenivas@human-logic.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'الرفع';
$string['headerconfig'] = 'الإعدادات';
$string['headerconfig_desc'] = 'الإعدادات';
$string['secret'] = 'إنشاء الرمز المُميز';
$string['secret_help'] = 'يساعد الرمز المُميز في تفويض المستخدم واستكشاف دورات الموقع';
$string['secret_desc'] = 'الرمز';
$string['secret_url'] = 'الحصول على رمز';
$string['explorenow'] = 'استكشاف الدورات التدريبية';
$string['addnewcourse'] = 'إنشاء دورة تدريبية جديدة';
$string['requiredfields'] = 'هناك حقول مطلوبة في هذا النموذج عليها علامة *.';
$string['coursesettings'] = 'إعدادات الدورة التدريبية';
$string['coursecreation'] = 'تنسيق الدورة التدريبية';
$string['multi_activity_course'] = 'تنسيق الموضوعات';
$string['single_activity_course'] = 'تنسيق نشاط أحادي';
$string['coursefullname'] = 'الاسم الكامل للدورة التدريبية';
$string['courseshortname'] = 'الاسم المختصر للدورة التدريبية';
$string['coursecategory'] = 'فئة الدورة التدريبية';
$string['coursetype'] = 'إنشاء دورة تدريبية';
$string['single_coursetype'] = 'دورة تدريبية مفردة';
$string['multi_coursetype'] = 'دورات تدريبية متعددة';
$string['cancel'] = 'إلغاء';
$string['submit'] = 'إنشاء دورات تدريبية';
$string['selectcategory'] = 'اختيار الفئة';
$string['coursetype_help'] = 'دورة تدريبية مفردة: إنشاء دورة تدريبية مفردة بعناصر محددة المحتوى <br> دورات تدريبية متعددة: إنشاء دورات تدريبية متعددة لعناصر محددة المحتوى';
$string['coursecreation_help'] = 'تنسيق نشاط أحادي: إنشاء دورة تدريبية بموضوع واحد <br> تنسيق الموضوعات: إنشاء دورة تدريبية بمواضيع متعددة';
$string['single_course_creation_success'] = 'تم إنشاء الدورة التدريبية بنجاح';
$string['single_course_creation_fail'] = 'فشل إنشاء الدورة التدريبية';
$string['multi_course_creation_success'] = 'تم إنشاء الدورات التدريبية بنجاح';
$string['multi_course_creation_fail'] = 'فشل إنشاء الدورات التدريبية';
$string['create_course_task'] = 'إنشاء دورات تدريبية';
$string['heading'] = 'استكشاف الدورات التدريبية';
$string['title'] = 'استكشاف الدورات التدريبية';
$string['shortname_exists'] = 'الاسم المختصر غير متوفر، قم بتغييره';
$string['author'] = 'الرفع';
$string['task_time'] = 'سيتم إنشاء الدورات التدريبية عند إتمام المهمة المجدولة التالية بتاريخ {$a} ';
$string['execute_now1'] = 'للإتمام الآن -';
$string['execute_now2'] = 'انقر هنا وقم بتشغيل مهمة إنشاء الدورات التدريبية';
$string['get_token'] = 'إعدادات التكوين';
$string['clear_filters'] = 'مسح عوامل التصفية';
$string['findcourse'] = 'البحث عن دورة تدريبية...';
$string['duration'] = 'المدة الزمنية';
$string['language'] = 'اللغة';
$string['program'] = 'البرنامج';
$string['keywords'] = 'الكلمات الرئيسية';
$string['create_courses'] = 'إنشاء دورات تدريبية';
$string['about_course'] = 'عن الدورة التدريبية';
$string['learning_objectives'] = 'الأهداف التعليمية';
$string['total_users'] = 'إجمالي المستخدمين';
$string['total_minutes'] = 'إجمالي الدقائق';
$string['total_courses'] = 'إجمالي الدورات التدريبية';
$string['course_statistics'] = 'إحصائيات الدورة التدريبية (الدورات التدريبية المسجلة)';
$string['completion_statistics'] = 'إحصائيات الإستكمال';
$string['total_enrolls'] = 'إجمالي التسجيلات';
$string['total_completions'] = 'إجمالي الاستكمالات';
$string['popular_courses'] = 'دورات تدريبية أكثر شعبية ';
$string['my_details'] = 'بياناتي';
$string['contact_person'] = 'جهة الاتصال';
$string['contact_details'] = 'بيانات الاتصال ';
$string['access_domain'] = 'مجال/ مجالات الوصول';
$string['subscripton_start'] = 'بداية الاشتراك';
$string['seat_utilization'] = 'استخدام المقعد';
$string['seats_bought'] = 'إجمالي المقاعد التي تم شراؤها';
$string['seats_used'] = 'إجمالي المقاعد المستخدمة';
$string['explore_courses'] = 'استكشاف الدورات التدريبية';
$string['analytics'] = 'التحليلات';
$string['gettoken'] = 'احصل على الرمز';
$string['heading_analytics'] = 'لوحة التحليلات';
$string['catalog_capability'] = 'لا تتوفر لديك الصلاحية لاستكشاف الموقع ';
$string['analytics_capability'] = 'لا تتوفر لديك الصلاحية لاستكشاف تحليلات الموقع ';
$string['privacy:metadata'] = 'يعرض مكون الموقع الإضافي فقط بيانات تعريف الدورة التدريبية الموجودة في خادم الموقع';
$string['to'] = 'إلى';
$string['no_course_found'] = 'لم يتم العثور على دورات تدريبية تطابق البحث';
$string['loading'] = 'تحميل...';
$string['levitate:view_levitate_analytics'] = 'القدرة على استكشاف قائمة الدورة التدريبية';
$string['levitate:view_levitate_catalog'] = 'القدرة على عرض التحليلات';
$string['invalidtoken'] = 'الرمز المُميز المُقدم غير صالح، يرجى تحديث الرمز المميز من إعدادات البرنامج الإضافي';
$string['outof'] = 'بعيدا عن المكان';
$string['xvalue'] = '×';
$string['report_month'] = 'شهر';
$string['report_timespent'] = 'قضاء الوقت';
$string['report_enrolments'] = 'التسجيلات';
$string['report_completions'] = 'الاكمال';
$string['coursecategory_required'] = 'يرجى اختيار فئة الدورة التدريبية';
$string['server_url'] = 'عنوان URL للخادم';
$string['no_response_found'] = 'Please update the <a href="{$a}">Sever URL</a> with the correct one.';
