let mutations = {
    GET_FILES(state, files){
        state.files = files
    },
    GET_ACTIVITIES(state, activities){
        state.activities = activities
    },
    ADD_FILE(state, file){
        state.files = [...state.files, file]
    },
    REMOVE_FILE(state, selected_file){
        const index = state.files.findIndex(file => file == selected_file);
        state.files.splice(index, 1);
    },
    ADD_ERR_MESSAGE(state, message){
        state.error = message
    }
};

export default mutations
