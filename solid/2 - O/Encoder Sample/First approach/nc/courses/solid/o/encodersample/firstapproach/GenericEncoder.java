package nc.courses.solid.o.encodersample.firstapproach;

public class GenericEncoder
{
    private JsonEncoder jsonEncoder;
    private XmlEncoder xmlEncoder;

    public String encodeToFormat(String data, String format) throws Exception {
        if (format.equals("json")) {
            this.jsonEncoder = new JsonEncoder();
            data = this.prepareData(data, format);
            return this.jsonEncoder.encode(data);
        } else if (format.equals("xml")) {
            this.xmlEncoder = new XmlEncoder();
            data = this.prepareData(data, format);
            return this.xmlEncoder.encode(data);
        } else {
            throw new Exception("Unknown format");
        }
    }

    private String prepareData(String data, String format) throws Exception {
        switch (format) {
            case "json":
                data = this.forceArray(data);
                data = this.fixKeys(data);
            case "xml":
                data = this.fixAttributes(data);
                break;
            default:
                throw new Exception("Unknown format");
        }
        return data;
    }

    private String fixAttributes(String data) {
        return "Fixing attributes";
    }

    private String fixKeys(String data) {
        return "Fixing keys";
    }

    private String forceArray(String data) {
        return "Forcing array";
    }
}

