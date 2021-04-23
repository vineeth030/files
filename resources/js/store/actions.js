let actions = {
    GET_FILES({commit}) {
        axios.get('/api/files')
            .then(res => {
                {
                    commit('GET_FILES', res.data);
                }
            })
            .catch(err => {
                console.log(err)
            })
    },
    ADD_FILE({commit}, file) {
        axios.post('/api/files', file)
            .then(res => {
                commit('ADD_ERR_MESSAGE', '')
                commit('ADD_FILE', res.data);
            }).catch(err => {
                commit('ADD_ERR_MESSAGE', err.response.data.error)
            })
    },
    REMOVE_FILE({commit}, file) {
        console.log('actions.js');
        axios.delete('/api/files', {data:{file:file}})
            .then(res => {
                commit('REMOVE_FILE', file);
            }).catch(err => {
            console.log(err)
        })
    }
};

export default actions
