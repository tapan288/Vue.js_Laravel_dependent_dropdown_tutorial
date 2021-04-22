<template>
    <div>
        <div class="form-group">
            <div class="col-sm-10">
                <label for="status">Select Class *</label>
                <select class="form-control" v-model="selectedClass">
                    <option value="">Select a Class</option>
                    <option :value="item.id" v-for="item in classes" :key="item.id" >{{ item.name }}</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <label for="status">Select Section *</label>
                <select
                    class="form-control"
                    required
                >
                    <option value="">Select a Section</option>
                    <option v-for="section in sections" :key="section.id" :value="section.id">{{ section.name }}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            classes : {},
            sections : {},
            selectedClass : '',
        }
    },
    watch : {
        selectedClass : function(value){
            axios.get('/api/sections?class_id=' + this.selectedClass)
            .then(response => {
                // console.log(response.data);
                this.sections = response.data.data;
            });
        }
    },
    mounted(){
        axios.get('/api/classes')
        .then(response => {
            this.classes = response.data.data;
        });
    }
}
</script>
