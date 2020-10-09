<?php

use App\School\Constants\MenuGroupConstant;
use App\Services\General\MenuService;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * @var MenuService
     */
    private $menuService;

    /**
     * MenuTableSeeder constructor.
     * @param MenuService $menuService
     */
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'order' => 1,
                'status' => true,
                'route' => 'admin.home',
                'icon' => 'm-menu__link-icon flaticon-line-graph',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Setting',
                'slug' => 'setting',
                'order' => 2,
                'status' => true,
                'route' => 'admin.setting.index',
                'icon' => 'm-menu__link-icon fa fa-cog',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Blog Category',
                'slug' => 'blogcategory',
                'order' => 3,
                'status' => true,
                'route' => 'admin.blog.category.index',
                'icon' => 'm-menu__link-icon fa fa-box',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Blog',
                'slug' => 'blog',
                'order' => 4,
                'status' => true,
                'route' => 'admin.blog.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Course',
                'slug' => 'course',
                'order' => 5,
                'status' => true,
                'route' => 'admin.course.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'About',
                'slug' => 'about',
                'order' => 6,
                'status' => true,
                'route' => 'admin.about.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
                'order' => 7,
                'status' => true,
                'route' => 'admin.contact.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Teacher',
                'slug' => 'teacher',
                'order' => 8,
                'status' => true,
                'route' => 'admin.teacher.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Notice',
                'slug' => 'notice',
                'order' => 9,
                'status' => true,
                'route' => 'admin.notice.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Banner',
                'slug' => 'banner',
                'order' => 10,
                'status' => true,
                'route' => 'admin.banner.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'MD Message',
                'slug' => 'md_message',
                'order' => 11,
                'status' => true,
                'route' => 'admin.message.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Abroad',
                'slug' => 'abroad',
                'order' => 12,
                'status' => true,
                'route' => 'admin.abroad.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
            [
                'name' => 'Download',
                'slug' => 'download',
                'order' => 13,
                'status' => true,
                'route' => 'admin.download.index',
                'icon' => 'm-menu__link-icon fa fa-book-reader',
                'parent_id' => null,
                'menu_group_id' => MenuGroupConstant::ADMIN_SIDEBAR_ID,
                'related_route' => null
            ],
        ];

        $this->menuService->truncate();

        foreach ($menus as $menu) {
            $this->menuService->updateOrCreate(['slug' => $menu['slug'], 'parent_id' => $menu['parent_id']], $menu);
        }
    }
}
