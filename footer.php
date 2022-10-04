<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossOrigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.profile_header input').on('click', function(){
            if (this).text()) == 'Deactivate') {
                $(this).css('class', 'activate').css('value', 'Activate');
                $('.profile_header button').css('class', 'inactive').text('Inactive');
            }
            else {
                $(this).css('class', 'deactivate').css('value', 'Deactivate');
                $('.profile_header button').text('Inactive').css('class', 'inactive');
            }
        });
    });
</script>