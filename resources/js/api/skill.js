import config from "./axios";

export const getSkills = async () => {
    try {
        const response = await config.get("/skills");
        console.log(response.data);
        return response.data.data;
    } catch (error) {
        console.error(error);
    }
}
