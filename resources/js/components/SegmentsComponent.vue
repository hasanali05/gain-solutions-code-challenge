<template>
    <div>
        <h1>
            Segments page
        </h1>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Segment name</label>
            <div class="col-sm-10">
            <input type="text" id="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Segment logic</label>
            <div class="col-sm-10">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control">
                            <option selected>Field...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>Operator...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="first field">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="second field">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                        <span> -- OR -- </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <select class="form-control">
                            <option selected>Field...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>Operator...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="first field">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="second field">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                        <button class="btn btn-primary mb-2">+ Or</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <select class="form-control">
                            <option selected>Field...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>Operator...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="first field">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="second field">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                        <button class="btn btn-primary mb-2">+ Or</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col text-center">
                        <span class="w-100"> -- AND -- </span>
                        <button class="btn btn-danger mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <select class="form-control">
                            <option selected>Field...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option selected>Operator...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="first field">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="second field">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                        <button class="btn btn-primary mb-2">+ Or</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-2">+ And</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Segments",
    data() {
        return {
        };
    },
    mounted() {
    }
}
</script>
