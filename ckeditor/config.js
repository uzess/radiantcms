/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
  // Define changes to default configuration here. For example:
  // config.language = 'fr';
  // config.uiColor = '#AADC6E';

  config.toolbar = [
    {name: 'document', groups: ['mode'], items: ['Source']},
    {name: 'clipboard', groups: ['clipboard'], items: ['PasteText', 'PasteFromWord']},
    {name: 'editing', groups: ['spellchecker'], items: ['Scayt']},
    {name: 'basicstyles', groups: ['basicstyles', 'cleanup'], items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
    {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
    {name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'Iframe']},
    {name: 'about', items: ['About']},
    '/',
    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
    {name: 'styles', items: ['Styles', 'Format', 'Fong', 'FontSize']},
    {name: 'styles', items: ['TextColor', 'BGColor']},
    {name: 'tools', items: ['Maximize']},
    {name: 'others', items: ['-']}
  ];

  config.allowedContent = {
    $1: {
      // Use the ability to specify elements as an object.
      elements: CKEDITOR.dtd,
      attributes: true,
      styles: true,
      classes: true
    }
  };
  config.disallowedContent = 'script; *[on*]';
  config.enterMode = CKEDITOR.ENTER_BR;

};

