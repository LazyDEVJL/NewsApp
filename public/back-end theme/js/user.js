/** 
 * CKEditor for Post Description
 */
ClassicEditor
    .create( document.querySelector( '#description' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

/** 
 * CKEditor for Post Content
 */
ClassicEditor
    .create( document.querySelector( '#content' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

/**
 * Category name to slug
 */
$("#name").keyup(function() {
    var str = $(this).val();
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents
    var from = "àáảãạâấậăắặđèéẽẻẹêếềễểệìíĩỉịòóõỏọôồốỗổộơờớỡởợùúũủụừứữửựỳýỹỷỵ·/_,:;";
    var to   = "aaaaaaaaaaadeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuyyyyy------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    slug = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    $("#slug").val(slug.toLowerCase());
});

/**
 * Category title to slug
 */
$("#title").keyup(function() {
    var str = $(this).val();
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents
    var from = "àáảãạâấậăắặđèéẽẻẹêếềễểệìíĩỉịòóõỏọôồốỗổộơờớỡởợùúũủụưừứữửựỳýỹỷỵ·/_,:;";
    var to   = "aaaaaaaaaaadeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyy------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    slug = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    $("#slug").val(slug.toLowerCase());
});
