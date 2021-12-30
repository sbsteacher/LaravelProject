function moveToDetail(id) {
    console.log('id : ' + id);
    location.href="/board/show/" + id;
}

var searchFrmElem = document.querySelector('#searchFrm');
console.log(searchFrmElem);
if(searchFrmElem) {
    searchFrmElem.rowCnt.addEventListener('change', function() {
        searchFrmElem.submit();
    });
}

var recordElemList = document.querySelectorAll('.record');
Array.from(recordElemList).forEach(function (item) {
   item.addEventListener('click', function() {
        var id = item.dataset.id;
        moveToDetail(id);
   });
});
