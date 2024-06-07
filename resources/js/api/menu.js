import config from "./axios";

export const getMenu = async () => {
    try {
        const response = await config.get("/menu");
        return response.data;
    } catch (error) {
        console.error(error);
    }
}


