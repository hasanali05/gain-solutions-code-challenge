<template>
    <div>
        <h1>
            Subscribers page
        </h1>
        <div class="row">
            <div class="col-3" v-for="(segment, segmentIndex) in segments" :key="'segment_' + segmentIndex">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>{{segment.name}}</h4>
                        <a class="btn btn-primary" @click="getSubscribers(segment)">Get Subscribers</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">
            Subscribers 
            <span class="badge badge-secondary" v-if="segment && segment.name">[ Segment: {{segment.name}} ]</span>
        </h2>
        <div >
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Birth Day</th>
                        <th scope="col">Create At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(subscriber, subscriberIndex) in subscribers" :key="'subscribers_' + subscriberIndex">
                        <th scope="row">{{subscriberIndex+1}}</th>
                        <td>{{subscriber.first_name}}</td>
                        <td>{{subscriber.last_name}}</td>
                        <td>{{subscriber.email}}</td>
                        <td>{{subscriber.birth_day}}</td>
                        <td>{{subscriber.created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    name: "Subscription",
    data() {
        return {
            segment: {},
            segments: [],
            subscribers: [],
        };
    },
    mounted() {
        this.loadSegments();
    },
    methods: {
        loadSegments() {
            axios.get('/segments')
            .then((response) => {
                this.segments = response.data.data
            })
        }, 
        getSubscribers(segment) {
            this.segment = segment;
            axios.get(`/subscribers?segment_id=${segment.id}`)
            .then((response) => {
                this.subscribers = response.data.data
            })
        }
    }
}
</script>
