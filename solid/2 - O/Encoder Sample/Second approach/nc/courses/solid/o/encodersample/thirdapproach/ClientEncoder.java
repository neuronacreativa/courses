package nc.courses.solid.o.encodersample.thirdapproach;

// Controller de encoders
public class ClientEncoder {

    public String encoderXml(String data) throws Exception {
        GenericEncoder genericEncoder = new GenericEncoder();
        XmlEncoder xmlEncoder = new XmlEncoder();
        return genericEncoder.encodeToFormat(data, xmlEncoder);
    }

}
