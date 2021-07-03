<?php

return [

    /*
    |-----------------------------------------------------------------------
    | MAIN MENU
    |-----------------------------------------------------------------------
    | Top menu
    |
    */
    'menus' => [
        'top-menu' => 'Myclass'
    ],





    /*
    |-----------------------------------------------------------------------
    | SIDEBAR
    |-----------------------------------------------------------------------
    | Left side bar
    |
    |
    |
    */
    'sidebar' => [
        'list' => 'Items',
        'add' => 'Add new',
        'trash' => 'Trash',
        'config' => 'Configurations',
        'lang' => 'Languages',
        'category' => 'Categories',
    ],





    /*
    |-----------------------------------------------------------------------
    | Table column
    |-----------------------------------------------------------------------
    | The list of columns in table
    |
    */
    'columns' => [
        'order' => '#',
        'name' => 'Class name',
        'operations' => 'Operations',
        'updated_at' => 'Updated at',
        'filename' => 'File name',
        'status' => 'Status',
    ],


    /*
    |-----------------------------------------------------------------------
    | Pages
    |-----------------------------------------------------------------------
    | Pages
    |
    */
    'pages' => [
        'title-list' => 'List of Myclass',
        'title-list-search' => 'Search results',
        'title-edit' => 'Edit class',
        'title-add' => 'Add new class',
        'title-delete' => 'Delete class',
        'title-config' => 'Current configurations',
        'title-lang' => 'Manage list of languages',
    ],





    /*
    |-----------------------------------------------------------------------
    | Button
    |-----------------------------------------------------------------------
    | The list of buttons
    |
    */
    'buttons' => [
        'search' => 'Search',
        'reset' => 'Resest',
        'add' => 'Add',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete-in-trash' => 'In trash',
        'delete-forever' => 'Forever',
    ],





    /*
    |-----------------------------------------------------------------------
    | Hint
    |-----------------------------------------------------------------------
    | The list of hint
    |
    */
    'hint'  => [
        'delete-forever' => 'Delete forever',
        'delete-in-trash' => 'Delete in trash',
    ],




    /*
    |-----------------------------------------------------------------------
    | Form
    |-----------------------------------------------------------------------
    | The list of elements in form
    |
    |
    */
    'form' => [
        'keyword' => 'Keyword',
        'sorting' => 'Sorting',
        'no-selected' => 'No selected',
        'status' => 'Status',
    ],





    /*
    |-----------------------------------------------------------------------
    | Descriptions
    |-----------------------------------------------------------------------
    | Descriptions
    |
    */
    'descriptions' => [
        'form' => 'class form',
        'update' => 'Update class',
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'slug' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category' => 'Click <a href=":href">here</a> to manage list of categories by token.',
        'slideshow' => 'Click <a href=":href">here</a> to manage list of slideshow',
        'overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'files' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'status' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'list' => 'List of items',
        'counters' => 'There are <b>:number</b> items',
        'counter' => 'There is <b>:number</b> item',
        'not-found' => 'Not found items',
        'config' => 'List of configurations',
        'lang' => 'List of languages',
    ],



    /*
    |-----------------------------------------------------------------------
    | Error
    |-----------------------------------------------------------------------
    | Show error message
    |
    |
    |
    */
    'errors' => [
        'required' => ':attribute is required',
        'required_length' => '<b> :attribute </b> allows from: <b>:minlength</b> to <b>:maxlength</b> characters.',
        'required_min_length' =>'<b> :attribute </b> allows from: <b>:minlength</b> characters.',
    ],




    /*
    |-----------------------------------------------------------------------
    | FIELDS
    |-----------------------------------------------------------------------
    | Column name in table
    |
    |
    |
    */
    'fields' => [
        'id' => 'class ID',
        'name' => 'class name',
        'description' => 'class Description',
        'overview' => 'class Overview',
        'slug' => 'Slug',
        'updated_at' => 'Updated at'
    ],




    /*
    |-----------------------------------------------------------------------
    | LABLES
    |-----------------------------------------------------------------------
    | The lables of element in form
    |
    |
    |
    */
    'labels' => [
        'name' => 'class name',
        'slug' => 'class slug',
        'overview' => 'class overview',
        'description' => 'class description',
        'image' => 'class image',
        'files' => 'class files',
        'category' => 'Category name',
        'slideshow' => 'Slideshow name',
        'title-search' => 'Search class',
        'title-backup' => 'Backups',
        'config' => 'Configurations',
        'keyword' => 'Keyword',
        'sorting' => 'Sorting',
        'no-selected' => 'No selected',
        'status' => 'Status',
        'delete' => 'Delete',
    ],





    /*
    |-----------------------------------------------------------------------
    | TABS
    |-----------------------------------------------------------------------
    | The name of tab
    |
    |
    |
      */
    'tabs' => [
        'menu_1' => 'Basic',
        'menu_2' => 'Advance',
        'menu_3' => 'Other',
        'menu_4' => 'Menu 4',
        'menu_5' => 'Menu 5',
        'menu_6' => 'Menu 6',
        'menu_7' => 'Menu 7',
        'menu_8' => 'Menu 8',
        'menu_9' => 'Menu 9',
        'menu_9' => 'Menu 9',
        'guide'  => 'Guide',
        'other'  => 'Other',
        'basic'  => 'Basic',
        'advance' => 'Advance',
    ],





    /*
    |-----------------------------------------------------------------------
    | HEADING
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'headings' => [
        'form-search' => 'Search Myclass',
        'list' => 'List of Myclass',
        'search' => 'Search results',
    ],





    /*
    |-----------------------------------------------------------------------
    | CONFIRMS
    |-----------------------------------------------------------------------
    | List of messages for confirm
    |
    |
    |
    */
    'confirms' => [
        'delete' => 'Are you sure you want to delete this item?',
    ],





    /*
    |-----------------------------------------------------------------------
    | ACTIONS
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'actions' => [
        'add-ok' => 'Add item successfully',
        'add-error' => 'Add item failed',
        'edit-ok' => 'Edit item successfully',
        'edit-error' => 'Edit item failed',
        'delete-ok' => 'Delete item successfully',
        'delete-error' => 'Delete item failed',
    ],
];