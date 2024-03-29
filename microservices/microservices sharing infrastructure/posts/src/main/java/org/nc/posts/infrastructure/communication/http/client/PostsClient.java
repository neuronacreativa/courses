package org.nc.posts.infrastructure.communication.http.client;

import javax.ws.rs.client.Client;
import javax.ws.rs.client.ClientBuilder;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import org.glassfish.jersey.client.ClientProperties;
import org.springframework.stereotype.Service;

@Service
public class PostsClient {
	
    private static final String REST_URI_INCREASE = "http://127.0.0.1:8083/user/increasePostCount/";
    private static final String REST_URI_DECREASE = "http://127.0.0.1:8083/user/decreasePostCount/";
    private final Client client = ClientBuilder.newClient();

    public Response putIncreasePostsInUser(String uuid) {
    	
    	client.property(ClientProperties.SUPPRESS_HTTP_COMPLIANCE_VALIDATION, true);
    	
    	return client.target(REST_URI_INCREASE).path(uuid).request(MediaType.APPLICATION_JSON).get();
    }

    public Response putDecreasePostsInUser(String uuid) {
    	
    	client.property(ClientProperties.SUPPRESS_HTTP_COMPLIANCE_VALIDATION, true);
    	
    	return client.target(REST_URI_DECREASE).path(uuid).request(MediaType.APPLICATION_JSON).get();
    }

}
