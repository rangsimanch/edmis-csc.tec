<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'jobtitle_create',
            ],
            [
                'id'    => '18',
                'title' => 'jobtitle_edit',
            ],
            [
                'id'    => '19',
                'title' => 'jobtitle_show',
            ],
            [
                'id'    => '20',
                'title' => 'jobtitle_delete',
            ],
            [
                'id'    => '21',
                'title' => 'jobtitle_access',
            ],
            [
                'id'    => '22',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '23',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '24',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '25',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '26',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '27',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '28',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '29',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '30',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '31',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '32',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '33',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '34',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '35',
                'title' => 'task_create',
            ],
            [
                'id'    => '36',
                'title' => 'task_edit',
            ],
            [
                'id'    => '37',
                'title' => 'task_show',
            ],
            [
                'id'    => '38',
                'title' => 'task_delete',
            ],
            [
                'id'    => '39',
                'title' => 'task_access',
            ],
            [
                'id'    => '40',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '41',
                'title' => 'content_management_access',
            ],
            [
                'id'    => '42',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '43',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '44',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '45',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '46',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '47',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '48',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '49',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '50',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '51',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '52',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '53',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '54',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '55',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '56',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '57',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '58',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '59',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '60',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '61',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '62',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '63',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '64',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '65',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '66',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '67',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '68',
                'title' => 'team_create',
            ],
            [
                'id'    => '69',
                'title' => 'team_edit',
            ],
            [
                'id'    => '70',
                'title' => 'team_show',
            ],
            [
                'id'    => '71',
                'title' => 'team_delete',
            ],
            [
                'id'    => '72',
                'title' => 'team_access',
            ],
            [
                'id'    => '73',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '74',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '75',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '76',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '77',
                'title' => 'department_create',
            ],
            [
                'id'    => '78',
                'title' => 'department_edit',
            ],
            [
                'id'    => '79',
                'title' => 'department_show',
            ],
            [
                'id'    => '80',
                'title' => 'department_delete',
            ],
            [
                'id'    => '81',
                'title' => 'department_access',
            ],
            [
                'id'    => '82',
                'title' => 'activity_calendar_report_access',
            ],
            [
                'id'    => '83',
                'title' => 'main_activity_access',
            ],
            [
                'id'    => '84',
                'title' => 'request_for_approval_access',
            ],
            [
                'id'    => '85',
                'title' => 'rfa_create',
            ],
            [
                'id'    => '86',
                'title' => 'rfa_edit',
            ],
            [
                'id'    => '87',
                'title' => 'rfa_show',
            ],
            [
                'id'    => '88',
                'title' => 'rfa_delete',
            ],
            [
                'id'    => '89',
                'title' => 'rfa_access',
            ],
            [
                'id'    => '90',
                'title' => 'rfatype_create',
            ],
            [
                'id'    => '91',
                'title' => 'rfatype_edit',
            ],
            [
                'id'    => '92',
                'title' => 'rfatype_show',
            ],
            [
                'id'    => '93',
                'title' => 'rfatype_delete',
            ],
            [
                'id'    => '94',
                'title' => 'rfatype_access',
            ],
            [
                'id'    => '95',
                'title' => 'rfa_comment_status_create',
            ],
            [
                'id'    => '96',
                'title' => 'rfa_comment_status_edit',
            ],
            [
                'id'    => '97',
                'title' => 'rfa_comment_status_show',
            ],
            [
                'id'    => '98',
                'title' => 'rfa_comment_status_delete',
            ],
            [
                'id'    => '99',
                'title' => 'rfa_comment_status_access',
            ],
            [
                'id'    => '100',
                'title' => 'rfa_document_status_create',
            ],
            [
                'id'    => '101',
                'title' => 'rfa_document_status_edit',
            ],
            [
                'id'    => '102',
                'title' => 'rfa_document_status_show',
            ],
            [
                'id'    => '103',
                'title' => 'rfa_document_status_delete',
            ],
            [
                'id'    => '104',
                'title' => 'rfa_document_status_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
