import Echo from "laravel-echo";
window.Pusher = require("pusher-js");

window.Echo = new Echo({
    broadcaster: "pusher",
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
});

// Mendengarkan notifikasi real-time
window.Echo.private("user-" + userId).listen(".task-completed", (e) => {
    alert(e.message);
    window.location.href = "/task/view-answer/" + e.task_id;
});
