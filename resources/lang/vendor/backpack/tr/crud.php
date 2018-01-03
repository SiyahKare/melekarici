<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Kaydet ve yeni',
    'save_action_save_and_edit' => 'Kaydet ve düzenle',
    'save_action_save_and_back' => 'Kaydet ve geri',
    'save_action_changed_notification' => 'Kayıt sonrası varsayılan işlem değiştirildi.',

    // Create form
    'add'                 => 'Yeni',
    'back_to_all'         => 'Geri dön: ',
    'cancel'              => 'Vazgeç',
    'add_a_new'           => 'Yeni ',

    // Edit form
    'edit'                 => 'Düzenle',
    'save'                 => 'Kaydet',

    // Revisions
    'revisions'            => 'Revizyonlar',
    'no_revisions'         => 'Revizyon bulunamadı',
    'created_this'          => 'created this',
    'changed_the'          => 'changed the',
    'restore_this_value'   => 'Restore this value',
    'from'                 => 'from',
    'to'                   => 'to',
    'undo'                 => 'Undo',
    'revision_restored'    => 'Revision successfully restored',

    // CRUD table view
    'all'                       => 'Tüm ',
    'in_the_database'           => 'listesi',
    'list'                      => 'Liste',
    'actions'                   => 'İşlemler',
    'preview'                   => 'Görüntüle',
    'delete'                    => 'Sil',
    'admin'                     => 'Admin',
    'details_row'               => 'Detay satırıdır. Düzenleyebilirsiniz.',
    'details_row_loading_error' => 'Detaylar yüklenirken hata oluştu. Lütfen yeniden deneyin.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Silmek istediğinize emin misiniz?',
        'delete_confirmation_title'                   => 'Kayıt Silindi',
        'delete_confirmation_message'                 => 'Kayıt başarıyla silinmiştir.',
        'delete_confirmation_not_title'               => 'SİLİNMEDİ',
        'delete_confirmation_not_message'             => "Bir hata oluştu. Kayıt silinmemiş olabilir.",
        'delete_confirmation_not_deleted_title'       => 'Silinmedi',
        'delete_confirmation_not_deleted_message'     => 'Gerçekleşmedi. Kaydınız güvende.',

        // DataTables translation
        'emptyTable'     => 'Tabloda veri bulunmamaktadır',
        'info'           => 'Toplam _TOTAL_ kayıttan _START_ ve _END_ arası gösteriliyor',
        'infoEmpty'      => 'Gösterilen 0 ile 0 arası, 0 toplam',
        'infoFiltered'   => '(Toplam _MAX_ kayıttan filtrelenmiştir)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => 'Sayfa başına _MENU_ kayıt',
        'loadingRecords' => 'Yükleniyor...',
        'processing'     => 'İşleniyor...',
        'search'         => 'Ara: ',
        'zeroRecords'    => 'Eşleşen kayıt bulunamadı',
        'paginate'       => [
            'first'    => 'İlk',
            'last'     => 'Son',
            'next'     => 'Sonraki',
            'previous' => 'Önceki',
        ],
        'aria' => [
            'sortAscending'  => ': sütunu artan olarak sıralayın',
            'sortDescending' => ': sütunu azalan olarak sıralayın',
        ],

    // global crud - errors
        'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
        'please_fix' => 'Lütfen hataları düzeltiniz:',

    // global crud - success / error notification bubbles
        'insert_success' => 'Kayıt başarıyla eklenmiştir.',
        'update_success' => 'Kayıt başarıyla güncellenmiştir.',

    // CRUD reorder view
        'reorder'                      => 'Sırala',
        'reorder_text'                 => 'Use drag&drop to reorder.',
        'reorder_success_title'        => 'Done',
        'reorder_success_message'      => 'Your order has been saved.',
        'reorder_error_title'          => 'Error',
        'reorder_error_message'        => 'Your order has not been saved.',

    // CRUD yes/no
        'yes' => 'Evet',
        'no' => 'Hayır',

    // Fields
        'browse_uploads' => 'Browse uploads',
        'clear' => 'Clear',
        'page_link' => 'Page link',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'Internal link',
        'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'External link',
        'choose_file' => 'Choose file',

    //Table field
        'table_cant_add' => 'Cannot add new :entity',
        'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'Dosya Yöneticisi',
];
