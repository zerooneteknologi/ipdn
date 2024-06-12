$(document).ready(function () {
  filter()
})

function filter() {
  const sortir = $('.sceme_sortir').val()
  const sceme_bnsp = $('.sceme_bnsp').val()
  const sceme_status = $('.sceme_status').val()
  $.get(
    '/search',
    { sceme_bnsp: `${sceme_bnsp}`, sceme_status: `${sceme_status}` },
    function (data) {
      $('.filter').html(data)
    },
  )
}
$(document).on('change', '.sceme_bnsp', function () {
  filter()
})
$(document).on('change', '.sceme_status', function () {
  filter()
})

// $(document).on('click', '.pagination a', function (e) {
//   e.preventDefault()
//   $.get($(this).attr('href'), {}, function (data) {
//     $('.filter').html(data)
//   })
// })
