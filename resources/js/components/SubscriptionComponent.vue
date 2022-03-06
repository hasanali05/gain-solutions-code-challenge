<template>
    <div>
        <h1>
            Subscribers page
        </h1>
        <div class="row">
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Segment Name</h4>
                        <a href="#" class="btn btn-primary">Get Subscribers</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Segment Name</h4>
                        <a href="#" class="btn btn-primary">Get Subscribers</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Segment Name</h4>
                        <a href="#" class="btn btn-primary">Get Subscribers</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Segment Name</h4>
                        <a href="#" class="btn btn-primary">Get Subscribers</a>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
        <h2 class="mt-5">
            Subscribers 
            <span class="badge badge-secondary">[ Segment: Abc ]</span>
        </h2>
        <div >
            <table class="table table-striped ">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>
<script>
export default {
    name: "Subscription",
    data() {
        return {
        };
    },
    mounted() {
    }
}
</script>
