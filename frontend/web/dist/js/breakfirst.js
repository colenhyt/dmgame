$(document).ready(function() {
    //init btn event
    $(".competition-bg").click(function() {
        $playList = $(this).parent().find(".bg_two");
        $playList.stop();
        $playList.toggle("slow");
    });


    //page load
    // $("#div1").load("/example/jquery/demo_test.txt #p1", function(responseTxt, statusTxt, xhr) {
    //     if (status == "success")
    //         alert("success");
    //     else if (status == "error")
    //         alert("failed");
    // });

    //
    // htmlobj = $.ajax({url:"http://localhost/index.php", async:true});
    // $(".leftteam").html(htmlobj.responseText);
})