function updateItems(delta){
    var $items = $('#group').children('.questionCard');
    var $current = $items.filter('.current');
    var index = $current.index();
    var newIndex = index+delta;
    // Range check the new index
    newIndex = (newIndex < 0) ? 0 : ((newIndex > $items.length) ? $items.length : newIndex); 
    if (newIndex != index){
        $current.removeClass('current');
        $current = $items.eq(newIndex).addClass('current');
        // Hide/show the next/prev
        $("#prev").toggle(!$current.is($items.first()));    
        $("#next").toggle(!$current.is($items.last()));    
    }
}
// $("#next").click(function () {
//     updateItems(1);
// });
// $("#prev").click(function () {
//     updateItems(-1);
// });
function next(){
    updateItems(1);

    var $items = $('#group').children('.questionCard');
    var $current = $items.filter('.current');
    var index = $current.index();
    console.log(index)
    if(index == 1){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
    }
    if(index == 2){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
        document.getElementById('line3').className = 'active_section';
        document.getElementById('span3').className = 'active_section';
    }
}

function previous(){
    updateItems(-1);

    var $items = $('#group').children('.questionCard');
    var $current = $items.filter('.current');
    var index = $current.index();
    console.log(index)
    if(index == 1){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
        document.getElementById('line3').className = '';
        document.getElementById('span3').className = '';
    }
    if(index == 0){
        document.getElementById('line2').className = '';
        document.getElementById('span2').className = '';
        document.getElementById('line3').className = '';
        document.getElementById('span3').className = '';
    }
}