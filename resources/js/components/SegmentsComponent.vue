<template>
    <div>
        <h1>
            Segments page
        </h1>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Segment name</label>
            <div class="col-sm-10">
                <input type="text" id="name" class="form-control" placeholder="Name" v-model="segment.name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Segment logic</label>
            <div class="col-sm-10">
                <template v-for="(ruleList, ruleListIndex) in segment.rules">
                    <div class="form-row mb-2" v-if="ruleListIndex > 0">
                        <div class="col text-center">
                            <span class="w-100"> -- AND -- </span>
                            <button class="btn btn-danger" v-if="(segment.rules.length - 1) > 0"  @click="removeAndRule(ruleListIndex)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <template v-for="(rule, ruleIndex) in ruleList">
                        <div class="form-row  mb-2">
                            <div class="col">
                                <select class="form-control" v-model="rule.field" @change="setFieldType(ruleListIndex, ruleIndex)">
                                    <option value="-1">Field...</option>
                                    <option v-for="(field, fieldKey) in fields" :value="fieldKey">{{field.name}}</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" v-model="rule.operator">
                                    <option value="-1">Operator...</option>
                                    <template v-for="(operator, operatorKey) in getOperatorsByIndex(ruleListIndex, ruleIndex)">
                                        <option v-if="operator" :value="operatorKey">{{operator.operator}}</option>
                                    </template>
                                </select>
                            </div>
                            <template v-if="rule.type == 'date'">
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="first field" v-model="rule.first_query">
                                </div>
                                <div class="col" v-if="checkBetweenType(ruleListIndex, ruleIndex)">
                                    <input type="date" class="form-control" placeholder="second field" v-model="rule.second_query">
                                </div>
                            </template>
                            <template v-if="rule.type == '' || rule.type == 'text'">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="first field" v-model="rule.first_query">
                                </div>
                            </template>
                            <div class="col-2">
                                <button class="btn btn-danger" v-if="(ruleList.length - 1) > 0" @click="removeOrRule(ruleListIndex, ruleIndex)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                                <button class="btn btn-primary" v-if="ruleIndex == (ruleList.length - 1)"  @click="addOrRule(ruleListIndex)">+ Or</button>
                                <span v-else> -- OR -- </span>
                            </div>
                        </div>
                    </template>
                </template>
                <div class="form-row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-2" @click="addAndRule">+ And</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-2" v-if="segment.id" @click="updateNewSegment">Update</button>
                        <button class="btn btn-primary mb-2" v-else @click="saveNewSegment">Save</button>
                        <button class="btn btn-warning mb-2" @click="cleanSegment">Make New</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-3" v-for="(segment, segmentIndex) in segments" :key="'segment_' + segmentIndex">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>{{segment.name}}</h4>
                        <a class="btn btn-primary" @click="editSegment(segment)">Edit</a>
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
            fields: [],
            operators: [],
            segments: [],
            segment: {}
        };
    },
    mounted() {
        this.cleanSegment();
        this.loadSegments();
        axios.get('/segment-relations')
        .then((response) => {
            this.fields = response.data.fields
            this.operators = response.data.operators
        })
    },
    methods: {
        loadSegments() {
            axios.get('/segments')
            .then((response) => {
                this.segments = response.data.data
            })
        }, 
        cleanSegment() {
            this.segment = {
                id: '',
                name: '',
                rules: [
                ],
            }
        },
        newAndRule() {
            return [
                    {
                        'id': '',
                        'type': '',
                        'line': -1,
                        'field': -1,
                        'operator': -1,
                        'first_query': '',
                        'second_query': '',
                    },
                ];
        },
        addAndRule() {
            let rules = this.segment.rules
            rules.push(this.newAndRule())
            this.$set(this.segment, 'rules', rules);
        },
        removeAndRule(ruleListIndex) {
            let ruleList = this.segment.rules
            ruleList.splice(ruleListIndex, 1)
            this.$set(this.segment, 'rules', ruleList);
        },
        newOrRule() {
            return {
                    'id': '',
                    'type': '',
                    'line': -1,
                    'field': -1,
                    'operator': -1,
                    'first_query': '',
                    'second_query': '',
                };
        },
        addOrRule(index) {
            let rules = this.segment.rules
            rules[index].push(this.newOrRule())
            this.$set(this.segment, 'rules', rules);
        },
        removeOrRule(ruleListIndex, ruleIndex) {
            let ruleList = this.segment.rules
            let rules = ruleList[ruleListIndex]
            rules.splice(ruleIndex, 1)
            ruleList[ruleListIndex] = rules
            this.$set(this.segment, 'rules', ruleList);
        },
        setFieldType(ruleListIndex, ruleIndex) {
            let rule = this.segment.rules[ruleListIndex][ruleIndex];
            let fieldIndex = rule.field;
            if(fieldIndex < 0) {
                this.$set(this.segment.rules[ruleListIndex][ruleIndex], 'type', '');
                return
            };
            let field = this.fields[fieldIndex]
            let fieldType = field.type
            this.$set(this.segment.rules[ruleListIndex][ruleIndex], 'type', fieldType);
        },
        getOperatorsByIndex(ruleListIndex, ruleIndex) {
            let fieldType = this.segment.rules[ruleListIndex][ruleIndex].type;
            let operators = [];
            if(fieldType == '') return operators
            this.operators.forEach((operator, index) => {
                if(operator.type == fieldType) {
                    operators[index] = operator;
                }
            })
            return operators;
        },
        checkBetweenType(ruleListIndex, ruleIndex) {
            let operator = this.segment.rules[ruleListIndex][ruleIndex].operator;
            operator = this.operators[operator];
            if(!operator)
                return false
            if(operator.operator == 'between') {
                return true;
            }
            return false;
        },
        editSegment(segment) {
            this.segment = JSON.parse(JSON.stringify(segment));
        },
        updateNewSegment() {
            axios.put(`/segments/${this.segment.id}`, this.segment)
            .then((response) => {
                this.cleanSegment();
                this.loadSegments();
            })
        },
        saveNewSegment() {
            axios.post('/segments', this.segment)
            .then((response) => {
                this.cleanSegment();
                this.loadSegments();
            })
        },
    }
}
</script>
