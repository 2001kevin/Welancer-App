<template>
    <div class="chat-message-right pb-4" v-for="message in messages">
		<div>
			<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
			<div class="text-muted small text-nowrap mt-2">2:33 am</div>
		</div>
		<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
			<div class="font-weight-bold mb-1">{{ message.user.name }}</div>
			{{ message.text }}
		</div>
	</div> 
</template>

<script>
    export default {
        props: ['message']
    };
</script>