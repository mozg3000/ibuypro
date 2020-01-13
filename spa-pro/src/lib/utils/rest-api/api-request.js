import axios from 'axios';

function getData(url){
    return axios({
        method: 'get',
        url: url,
        headers: {'Content-Type': 'application/json'}
    });
}
export {getData};