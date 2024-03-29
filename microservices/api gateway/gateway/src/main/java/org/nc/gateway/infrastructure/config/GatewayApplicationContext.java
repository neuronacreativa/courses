package org.nc.gateway.infrastructure.config;


import org.nc.gateway.application.services.AuthService;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import springfox.documentation.builders.PathSelectors;
import springfox.documentation.builders.RequestHandlerSelectors;
import springfox.documentation.service.ApiInfo;
import springfox.documentation.service.Contact;
import springfox.documentation.spi.DocumentationType;
import springfox.documentation.spring.web.plugins.Docket;

import java.util.Collections;

@Configuration
//@EnableSwagger2
public class GatewayApplicationContext {
	
	@Bean
	public AuthService getAuthService() {
		return new AuthService();
	}

	@Bean
	public Docket apiDocket() {
		return new Docket(DocumentationType.SWAGGER_2)
				.select()
				.apis(RequestHandlerSelectors.basePackage("org.nc.gateway.infrastructure.controllers"))
				.paths(PathSelectors.any())
				.build()
				.apiInfo(getApiInfo())
				;
	}

	private ApiInfo getApiInfo() {
		return new ApiInfo(
				"Sample Gateway API",
				"Sample Gateway API Description",
				"1.0",
				"https://altran.com",
				new Contact("Ricardo Ortega", "https://altran.com", "ricardo.ortegaavalo@altran.com"),
				"LICENSE",
				"LICENSE URL",
				Collections.emptyList()
				);
	}

}
