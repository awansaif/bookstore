@extends('web.layout.web')

@section('content')
@livewire('pages.single-news-page')
@endsection

<style>
    .replyId {
        cursor: pointer;
    }
</style>


<script>
    $(".replyId").on('click',function () {
        var replyId = $(this).attr('replyId');
        console.log('asd');
        var elmnt = document.getElementById("replyForm");
        elmnt.scrollIntoView();
        $(".writeCR").html("WRITE Reply");
        $(".rreply").val(replyId);
        $(".messagePlaceholder").attr("placeholder","Reply Message");
    })
</script>
