import config from "./axios";

export const addDeveloper = async (developer) => {
    try {
        const response = await config.post("/developers", developer);
        console.log(response.data);
        return response.data;
    } catch (error) {
        console.error(error);
    }
};
