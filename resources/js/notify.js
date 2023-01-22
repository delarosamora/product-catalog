import $ from "jquery";
import Notify from 'simple-notify'
import 'simple-notify/dist/simple-notify.min.css'

$(() => {
    const notificationStatus = $('#status-notification').data("status")
    const notificationTitle = $('#status-notification').data("title")
    const notificationText = $('#status-notification').data("text")

    new Notify({
        status: notificationStatus,
        title: notificationTitle,
        text: notificationText,
        autoclose: true
    })
})