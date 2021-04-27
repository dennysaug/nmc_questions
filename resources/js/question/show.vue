<template>
    <div class="card">
        <h5 class="card-header">QUESTION</h5>
        <div class="card-body">
            <h5 class="card-title">Create a new question</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <v-errors :errors="errors" v-if="errors"></v-errors>
            <form>
                <div class="form-group row">
                    <label for="question" class="col-sm-2 col-form-label">Question</label>
                    <div class="col-sm-10">
                        <textarea
                            name="title"
                            v-model="data.title"
                            id="question"
                            cols="75"
                            rows="6">
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="altertinative_a" class="col-sm-2 col-form-label">Alternative A</label>
                    <div class="col-sm-10">
                        <input name="alternative_a" v-model="data.alternative_a" type="text" class="form-control"
                               placeholder="Alternative A">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alternative_b" class="col-sm-2 col-form-label">Alternative B</label>
                    <div class="col-sm-10">
                        <input name="alternative_b" v-model="data.alternative_b" type="text" class="form-control"
                               placeholder="Alternative B">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alternative_c" class="col-sm-2 col-form-label">Alternative C</label>
                    <div class="col-sm-10">
                        <input name="alternative_c" v-model="data.alternative_c" type="text" class="form-control"
                               placeholder="Alternative C">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alternative_d" class="col-sm-2 col-form-label">Alternative D</label>
                    <div class="col-sm-10">
                        <input name="alternative_d" v-model="data.alternative_d" type="text" class="form-control"
                               placeholder="Alternative D">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alternative_e" class="col-sm-2 col-form-label">Alternative E</label>
                    <div class="col-sm-10">
                        <input name="alternative_e" v-model="data.alternative_e" type="text" class="form-control"
                               placeholder="Alternative E">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="correct" class="col-sm-2 col-form-label">Alternative Correct</label>
                    <div class="col-sm-10">
                        <select name="correct" v-model="data.correct">
                            <option value="">Select</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </div>
                <hr/>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" @click.prevent="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            errors: false,
            data: {
                title: null,
                alternative_a: null,
                alternative_b: null,
                alternative_c: null,
                alternative_d: null,
                alternative_e: null,
                correct: null
            }
        }
    },
    methods: {
        submit() {
            axios.post('/api/question', this.data).
            then(response => {
                if(response.status == 201) {
                    localStorage.setItem('success_msg', true);
                    this.$router.push('question');
                }
            }).
            catch(error => {
                if(error.response.data.errors) {
                   this.errors = error.response.data.errors;
                   console.log(this.errors);

                }
            });
        }
    }
}
</script>

<style scoped>

</style>
