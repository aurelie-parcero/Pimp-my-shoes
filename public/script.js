(function() {
    var i, resize;
    // fonction d'intervale d'animation
    // i = setInterval(function() {
    //     return $(".toggler").toggleClass("cross");
    // }, 1500);

    $(".toggler").click(function() {
        clearInterval(i);
        return $(".toggler").toggleClass("cross");
    });

    resize = function() {
        return $("body").css();
    };

    $(window).resize(resize);

    resize();

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBLENBQUEsRUFBQTs7RUFBQSxDQUFBLEdBQUksV0FBQSxDQUFZLFFBQUEsQ0FBQSxDQUFBO1dBQ2QsQ0FBQSxDQUFFLEtBQUYsQ0FBUSxDQUFDLFdBQVQsQ0FBcUIsT0FBckI7RUFEYyxDQUFaLEVBRUYsSUFGRTs7RUFJSixDQUFBLENBQUUsS0FBRixDQUFRLENBQUMsS0FBVCxDQUFlLFFBQUEsQ0FBQSxDQUFBO0lBQ2IsYUFBQSxDQUFjLENBQWQ7V0FDQSxDQUFBLENBQUUsS0FBRixDQUFRLENBQUMsV0FBVCxDQUFxQixPQUFyQjtFQUZhLENBQWY7O0VBSUEsTUFBQSxHQUFTLFFBQUEsQ0FBQSxDQUFBO1dBQ1AsQ0FBQSxDQUFFLE1BQUYsQ0FBUyxDQUFDLEdBQVYsQ0FDRTtNQUFBLFlBQUEsRUFBYyxDQUFDLENBQUMsQ0FBQyxDQUFDLE1BQU0sQ0FBQyxXQUFQLEdBQXFCLEdBQXRCLENBQUEsR0FBNkIsQ0FBOUIsQ0FBRixHQUFxQztJQUFuRCxDQURGO0VBRE87O0VBSVQsQ0FBQSxDQUFFLE1BQUYsQ0FBUyxDQUFDLE1BQVYsQ0FBaUIsTUFBakI7O0VBQ0EsTUFBQSxDQUFBO0FBYkEiLCJzb3VyY2VzQ29udGVudCI6WyJpID0gc2V0SW50ZXJ2YWwgLT5cbiAgJChcImRpdlwiKS50b2dnbGVDbGFzcyBcImNyb3NzXCJcbiwgMTUwMFxuXG4kKFwiZGl2XCIpLmNsaWNrIC0+XG4gIGNsZWFySW50ZXJ2YWwgaVxuICAkKFwiZGl2XCIpLnRvZ2dsZUNsYXNzIFwiY3Jvc3NcIlxuXG5yZXNpemUgPSAtPlxuICAkKFwiYm9keVwiKS5jc3NcbiAgICBcIm1hcmdpbi10b3BcIjogfn4oKHdpbmRvdy5pbm5lckhlaWdodCAtIDE1MCkgLyAyKSArIFwicHhcIlxuICAgIFxuJCh3aW5kb3cpLnJlc2l6ZSByZXNpemVcbnJlc2l6ZSgpXG4iXX0=
//# sourceURL=coffeescript
