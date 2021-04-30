// ClassicEditor
//     .create( document.querySelector( '#body' ), {
//         toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
//         heading: {
//             options: [
//                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
//                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
//                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
//             ]
//         }
//     } )
//     .catch( error => {
//         console.log( error );
//     } ); import CKFinder from '@ckeditor/ckeditor5-ckfinder/src/ckfinder';
ClassicEditor
.create( document.querySelector( '#body' ), {
    ckfinder: {
        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
    },
    toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic','link', 'blockQuote','numberedList','|', 'undo', 'redo' ]
} )
.catch( error => {
    console.error( error );
} );
   

// ClassicEditor
//     .create( document.querySelector( '#body' ), {
//         plugins: [ CKFinder],

//         // Enable the "Insert image" button in the toolbar.
//         toolbar: [ 'uploadImage'],

//         ckfinder: {
//             // Upload the images to the server using the CKFinder QuickUpload command.
//             uploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
//         }
//     } ) .catch( error => {
//         console.error( error );
//     } );

  